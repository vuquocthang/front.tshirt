<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCampaign;
use App\ProductColor;
use App\OrderDetail;
use App\Order;
use App\User;
use Cart;
use Mail;

class HomeController extends Controller
{
	protected $redirectTo = '/';
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$products = Product::select('product.*', 'product_campaign.price')
			->join('product_campaign', 'product.id', 'product_campaign.product_id')
			->where('product_campaign.expiry_at', '>' , \Carbon\Carbon::now())
			->where('product_campaign.created_at', '<' , \Carbon\Carbon::now());
			//->get();
		
		$noibats = $products->limit(4)->get();
		
		//dd($products);	
			
		
		
        return view('front.home', [
			//'products' => $products,
			'noibats' => $noibats
		]);
    }
	
	public function showLoginForm(){
		return view('front.login');
	}
	
	public function shop(Request $req){
		$products = Product::select('product.*', 'product_campaign.price')
			->join('product_campaign', 'product.id', 'product_campaign.product_id')
			->where('product_campaign.expiry_at', '>' , \Carbon\Carbon::now())
			->where('product_campaign.created_at', '<' , \Carbon\Carbon::now());
		
		$orderFilter = $req->get("order");
		$priceFilter = $req->get("price");
		$sizeFilter = $req->get("size");
		$colorFilter = $req->get("color");
		$showFilterBar = false;
			
		if( $orderFilter == 1 || $orderFilter == 2 || $orderFilter == 3){
			try{
				switch($orderFilter){
					case 1 : $products = $products->orderBy("product_campaign.created_at", "DESC"); break;
					case 2 : $products = $products->orderBy("product_campaign.price", "ASC"); break;
					case 3 : $products = $products->orderBy("product_campaign.price", "DESC"); break;
				}
			}catch(\Exception $e){
				
			}
			
			$showFilterBar = true;
		}
		
		if( $priceFilter != "all" && !empty($priceFilter) ){
			try{
				$priceLow = explode("|", $priceFilter)[0];
				$priceHigh = explode("|", $priceFilter)[1];
				
				$products = $products->where("product_campaign.price", ">=", $priceLow)
								->where("product_campaign.price", "<=", $priceHigh);
			}catch(\Exception $e){
				
			}
			
			$showFilterBar = true;
		}
		
		if( $colorFilter != "all" && !empty($colorFilter) ){
			try{
				
				$products = $products->where("product.color_code",  $colorFilter);
			}catch(\Exception $e){
				
			}
			
			$showFilterBar = true;
		}
		
		
		$products = $products->paginate(20);
		$colors = ProductColor::all();	
		
		//dd($products);
		return view('front.shop', [
			'products' => $products,
			'colors' => $colors,
			'showFilterBar' => $showFilterBar
		]);
	}
	
	public function product(Product $product){
		if( !$product->hasCampaign() ){
			return redirect()->route('shop');
		}
		
		$colors = ProductColor::all();
	
		return view('front.product.index', [
			'product' => $product,
			'colors' => $colors
		]);
	}
	
	public function productBuyNow(Product $product){
		$colors = ProductColor::all();
	
		return view('front.product-buy-now.index', [
			'product' => $product,
			'colors' => $colors
		]);
	}
	
	public function error(){
		return view('front.404');
	}
	
	public function checkoutForm(){
		if( Cart::count() == 0 ){
			return redirect()->route('cart');
		}
	
		return view('front.checkout');
	}
	
	public function checkout(Request $req){
		$order = Order::create([
			'cus_name' => $req->cus_name,
			'cus_email' => $req->cus_email,
			'cus_phone' => $req->cus_phone,
			'cus_address' => $req->cus_address,
			'cus_payment_method' => $req->cus_payment_method,
			'cus_note' => $req->cus_note
		]);
		
		$order->id_hash = md5($order->id . "s3cr3t1111");
		$order->save();
		
		//order details
		$items = Cart::content();
		
		foreach($items as $item){
			if(Product::find($item->id) || ProductCampaign::find($item->options->campaign_id) ){
				$orderDetail = OrderDetail::create([
					'order_id' => $order->id,
					'seller_id' => $item->options->seller_id,
					'product_id' => $item->id,
					'campaign_id' => $item->options->campaign_id,
					'product_quantity' => $item->qty,
					'product_size' => $item->options->size,
					'product_color' => $item->options->color
				]);
			}
		}
		
		//Cart::destroy();
		
		//creating new account if email is not exist
		$check = User::where('email', $req->cus_email)->first();
		
		$user = null;
		
		$rawPassword = $this->randomPassword();
		
		if(!$check){
			$user = User::create([
				'name' => $req->cus_name,
				'email' => $req->cus_email,
				'password' => bcrypt($rawPassword) ,
				'role' => 'User'
			]);
			
			$user->rawpw = $rawPassword;
			$order->user_id = $user->id;
			$order->save();
		}else{
			$order->user_id = $check->id;
			$order->save();
		}
		
		//send mail to user
		Mail::send('emails.order.index', [ 'order' => $order, 'user' => $user  ], function ($message) use ($order){
			$message
			  ->from('from@yourdomain.com', 'King Clothes')
			  ->to($order->cus_email, $order->cus_name)
			  ->subject('Xác nhận đơn hàng #' . $order->id);
		});
		
		
		//return
		return redirect()
					->route('order', $order->id_hash)
					->with('email', $req->cus_email);
	}
	
	function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
}

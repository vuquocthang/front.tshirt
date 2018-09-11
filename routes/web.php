<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
//use Cart;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'HomeController@shop')->name('shop');

Route::get('/p/{product}', 'HomeController@product');

Route::get('/pbn/{product}', 'HomeController@productBuyNow');

Route::get('/404', 'HomeController@error')->name('404');

Route::post('addToCart', function(Request $req){
	
	$input = [
		'id' => $req->product_id,
		'name' => $req->name,
		'price' => $req->price,
		'qty' => $req->quantity,
		'options' => [
			'id' => $req->product_id,
			'size' => $req->attribute_pa_size,
			'color' => $req->attribute_pa_colors,
			'color_code' => $req->color_code,
			'image' => $req->image,
			'img_front' => $req->img_front,
			'campaign_id' => $req->campaign_id,
		]
	];
	
	if( !empty($req->seller_id)  ){
		$input['options']['seller_id'] = $req->get('seller_id');
	}
	
	Cart::add($input);
	
	return redirect()->back();
})->name('addToCart');

Route::post('update-cart', function(Request $req){
	//dd($req->qty);
	$items = Cart::content();
	
	foreach($items as $index => $item){
		try{
			$inputName = $item->rowId . '_qty';
		
			Cart::update($item->rowId, [
				'qty' => $req->$inputName
			]);
		}catch(\Exception $e){
			
		}
	}
	
	return redirect()->back();
	
})->name('update-cart');

Route::get('cart', function(){
	return view('front.cart');
})->name('cart');

Route::get('removeItemInCart/{rowId}', function($rowId){
	try{
		Cart::remove($rowId);
	}catch(\Exception $e){
			
	}
	
	return redirect()->back();
})->name('removeItemInCart');

Route::get('/checkouts', 'HomeController@checkoutForm')->name('checkout');

Route::post('/checkouts', 'HomeController@checkout')->name('checkout');

Route::get('/order/{orderIdHashed}', function($orderIdHashed){
	$order = \App\Order::where("id_hash", $orderIdHashed)->first();
	
	if(!$order){
		return redirect()->route('404');
	}
	
	return view('front.thankyou', [
		'order' => $order
	]);
})->name('order');

Auth::routes();

Route::get('/login', function(){
	return view('front.login');
})->name('login')->middleware('guest');


Route::get('/home', function(Request $req){
	//echo $req->cookie('laravel_session');
	
	//echo Cookie::get('XSRF-TOKEN');
	
	return redirect()->route('home');
});

Route::get('addCookie', function(Request $request, CookieJar $cookieJar){
	$cookieJar->queue(cookie('ck', $request->get('ck'), 45000));
	
	echo $request->cookie('ck');
});

Route::get('/email', function () {
  Mail::send('emails.test', [], function ($message) {
    $message
      ->from('from@yourdomain.com', 'Your Name')
      ->to('vuquocthang63@gmail.com', 'Receiver Name')
      ->subject('From SparkPost with ❤');
  });
});


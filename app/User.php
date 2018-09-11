<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\OrderDetail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
		'email', 
		'password', 
		'role',
		'balance',
		
		'phone',
		'bank_name',
		'bank_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function products(){
		return $this->hasMany('App\Product');
	}
	
	public function campaigns(){
		return $this->hasManyThrough('App\ProductCampaign', 'App\Product');
	}
	
	public function orders(){
		return $this->hasMany(
			'App\Order',
			'user_id'
		);
	}
	
	public function orderDetails(){
		return $this->hasManyThrough('App\OrderDetail', 'App\Product');
	}
	
	public function designProfitsPerDay(){
		return OrderDetail::selectRaw('order_detail.created_at , SUM(product_quantity) as ppd')
			->join('product', 'order_detail.product_id', 'product.id')
			->groupBy('order_detail.created_at');
	}
	
	public function numberOfProductsSelled(){
		return $this->orderDetails()
					->sum('product_quantity');
	}
	
	public function numberOfProductsSelledBy($sellerId){
		return $this->orderDetails()
					->where('seller_id', $sellerId)
					->sum('product_quantity');
	}
	
	public function numberOfProductsSelledByDate($sellerId, $date){
		return $this->orderDetails()
					->where('seller_id', $sellerId)
					->where('created_at', $date)
					->sum('product_quantity');
	}
	
	public function designProfit(){
		return $this->numberOfProductsSelled() * 25000;
	}
	
	public function sellProfit(){
		$campaigns = $this->campaigns()->get();
		
		$profit = 0;
		
		foreach($campaigns as $campaign){
			$profit += $campaign->sellProfit($this->id);
		}
		
		return $profit;
	}
	
	public function sellProfitByDate($date){
		$campaigns = $this->campaigns()->get();
		
		$profit = 0;
		
		foreach($campaigns as $campaign){
			$profit += $campaign->sellProfitByDate($this->id, $date);
		}
		
		return $profit;
	}
	
	public function designProfitByDate($date){
		$q = OrderDetail::selectRaw('order_detail.created_at , SUM(product_quantity) as ppd')
			->join('product', 'order_detail.product_id', 'product.id')
			->whereDate('order_detail.created_at', '=', $date )
			->get();
			
		if( count($q) == 0 ){
			return 0;
		}	
		
		return $q[0]->ppd * 25000;
	}
	
	public function designProfitFromDate($from){
		$q = OrderDetail::selectRaw('order_detail.created_at , SUM(product_quantity) as ppd')
			->join('product', 'order_detail.product_id', 'product.id')
			->whereDate('order_detail.created_at', '>=', $from )
			->get();
			
		if( count($q) == 0 ){
			return 0;
		}	
		
		return $q[0]->ppd * 25000;
	}
	
	public function sellProfitFromDate($from){
		$campaigns = $this->campaigns()->get();
		
		$profit = 0;
		
		foreach($campaigns as $campaign){
			$profit += $campaign->sellProfitByFromDate($this->id, $from);
		}
		
		return $profit;	
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    //
	
	use Sluggable;
	
	protected $table = 'product';
	
	protected $fillable = [
		'name',
		'price',
		'description',
		'design_id',
		'base64_front',
		'base64_behind',
		'user_id',
		'img_front',
		'img_back',
		'color_code',
		'user_id'
	];
	
	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
	
	public function getRouteKeyName()
    {
        return 'slug';
    }
	
	public function campaigns(){
		return $this->hasMany("App\ProductCampaign");
	}
	
	public function hasCampaign(){
		if( $this->campaigns()->count() == 0 ){
			return false;
		}
		
		$check = $this->campaigns()
					->orderBy('created_at', 'DESC')
					->where('expiry_at', '>', date('Y-m-d') )
					->first();
		
		if( $check ){
			return $check;
		}
		
		return false;
	}

}

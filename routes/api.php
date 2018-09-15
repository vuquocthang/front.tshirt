<?php

use Illuminate\Http\Request;
use App\Product;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/getdistricts/{provinceId}', function($provinceId){
	$url = "https://e-centre.bizwebvietnam.net/checkout/getdistricts?provinceId=" . $provinceId;
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$result = curl_exec($ch);
	curl_close($ch);
	
	return $result;
});

Route::prefix('product')->group(function(){
	Route::get("/", function(){
		return "p";
	});
	
	Route::post('/', function(Request $req){
		header('Access-Control-Allow-Origin: http://design.fb88.ga');  
		#header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		$check = Product::where('design_id', $req->design_id)->first();
		
		if( !$check ){
			$product = Product::create($req->all());
			return $product;
		}
		
		return $check;
	});
});

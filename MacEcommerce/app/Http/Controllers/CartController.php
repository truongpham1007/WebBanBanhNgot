<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class CartController extends Controller
{
    public function getCheckOut(Request $req){
    	
       
    	$productId = $req->product_id_hidden;
    	$quantity = $req->product_qty;
    	$product_info = DB::table('tbl_product')->where('product_id',$productId)->first(); 

    	$data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        if($product_info->product_promotion_price == 0)
       	 	$data['price'] = $product_info->product_unit_price;
    	else
    		$data['price'] = $product_info->product_promotion_price;
        $data['weight'] = $data['price'];
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
       	return Redirect::to('/show-cart');

    	

    }
    public function getCart (){
    	$cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderby('category_id','asc')->get(); 
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','asc')->get(); 
    	return view('pages.shopping_cart')->with('category',$cate_product)->with('brand',$brand_product);
    }
}

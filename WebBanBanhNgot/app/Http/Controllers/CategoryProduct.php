<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Products;
session_start();


class CategoryProduct extends Controller
{
    public function add_category_product(){
    	return view('admin.add_category');

    }
    public function all_category_product(){
    	$all_category_product = DB::table('tbl_category_product')->get();
    	$manager_category_product = view('admin.all_category')->with('all_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.all_category',$manager_category_product);

    }
     public function save_category_product(Request $req){
     	
     	$data = array();
     	$data['category_name'] = $req->category_product_name;
    	$data['category_unit_price'] = $req->category_product_unit_price;
     	$data['category_promotion_price'] = $req->category_product_promotion_price;
        $data['category_image'] = $req->category_product_image;
     	$data['category_unit'] = $req->category_product_unit;
        $data['category_type'] = $req->category_product_type;
     	$data['category_desc'] = $req->category_product_desc;
     	$data['category_new'] = $req->category_product_new;
     	$data['category_status'] = $req->category_product_status;
    
     	DB::table('tbl_category_product')->insert($data);
     	Session::put('message','Thêm thành công!!');
    	return Redirect::to('add-category-product');
    }
}

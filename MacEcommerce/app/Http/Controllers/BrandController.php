<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_brand_product(){
        $this->AuthLogin();
    	return view('admin.add_brand_product');
    }
    public function all_brand_product(){
        $this->AuthLogin();
    	$all_brand_product = DB::table('tbl_brand')->get();
    	$manager_brand_product  = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
    	return view('admin_layout')->with('admin.all_brand_product', $manager_brand_product);


    }
    /*public function save_brand_product(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['brand_name'] = $request->brand_product_name;
    	$data['brand_desc'] = $request->brand_product_desc;
    	$data['brand_status'] = $request->brand_product_status;

    	DB::table('tbl_brand')->insert($data);
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	return Redirect::to('add-brand-product');
    }*/
    function PostBrand(Request $request){
       $cat_name = $request->cat_name;
       $cat_desc = $request->cat_desc;
       $cat_stt = $request->cat_stt;
       $add_cat = DB::table('tbl_brand')->insert([
        'brand_name' => $cat_name,
        'brand_desc' => $cat_desc,
        'brand_status' => $cat_stt,
      
      ]);
      if($add_cat){
        echo "done";
      }else{
        echo "error";
      }
      
    }
    public function unactive_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Không kích hoạt thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');

    }
    public function active_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');

    }
    public function edit_brand_product($brand_product_id){
        $this->AuthLogin();
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();

        $manager_brand_product  = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);

        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }
    public function update_brand_product(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product(Request $request){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$request->idBrand)->delete();
       echo 1;
    }

    //End Function Admin Page
     
     public function show_brand_home($brand_slug){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_brand.brand_slug',$brand_slug)->get();

        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_slug)->limit(1)->get();

        return view('pages.brand.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);
    }
    public function showBrandProduct ($brand_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderby('category_id','asc')->get(); 
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','asc')->get(); 
        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_id)->get();
        $all_product = DB::table('tbl_product')->where('product_status',0)->orderby('product_id','desc')->limit(8)->get(); 

            
       
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();
        return view('pages.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_id',$brand_by_id)->with('all_product',$all_product)->with('brand_name',$brand_name);
    }
}

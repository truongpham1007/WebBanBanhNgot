<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
     public function getIndex(){
        
        $sale_product = DB::table('tbl_product')->where('product_status',0)->where('product_promotion_price','<>',0)->orderby('product_id','desc')->limit(8)->get(); 
        $all_product = DB::table('tbl_product')->where('product_status',0)->orderby('product_id','desc')->get(); 
        return view('pages.home')->with('all_product',$all_product)->with('sale_product',$sale_product);
    }


    public function getProductType(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderby('category_id','asc')->get(); 
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','asc')->get(); 
        $sale_product = DB::table('tbl_product')->where('product_status',0)->where('product_promotion_price','<>',0)->orderby('product_id','desc')->limit(8)->get(); 
        $all_product = DB::table('tbl_product')->where('product_status',0)->orderby('product_id','desc')->get(); 
    	return view('pages.product_type')->with('all_product',$all_product)->with('sale_product',$sale_product)->with('category',$cate_product)->with('brand',$brand_product);
    }

     public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 

        Session::put('key',$keywords);
        return view('pages.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
    public function getContact(){
        return view('pages.contact');
    }


   
    public function getAboutUs(){
    	return view('pages.about_us');
    }
    public function getForgot(){
    	return view('pages.forgot_pass');
    }

    public function getRegister(){
    	return view('pages.register');
    }
    public function getCheckOut(){
        return view('pages.checkout');
    }

    public function getKhoiphuc($email, $code){
        return view('pages.khoiphuc', compact('email', 'code'));
    }
    public function postKhoiphuc(Request $req){
        $this->validate($req,
            [
                'password'=>'required|min:6|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
            
        $password = Hash::make($req->password);

        DB::table('users')
            ->where('email', $req->email)
            ->update(['password' => $password]);

        DB::table('reminders')->where('code', '=', $req->code)->delete();
        
        return redirect()->back()->with(['thanhcong' => 'Khôi phục tài khoản thành công']);
    }

    public function postQuenmatkhau(Request $req){
        $user = DB::table('users')->where('email', $req->email)->first();

        if(!$user){
            return redirect()->back()->with(['loi' => 'Email không tồn tại trong hệ thống']);
        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ?  : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['thanhcong' => 'Code phục hồi đã gửi đến email của bạn']);
    }

    public function sendEmail($user, $code){
        Mail::send(
            'pages.forgot',
            ['user'=>$user, 'code'=>$code],
            function($message) use  ($user){
                $message->to($user->email);
                $message->subject("$user->email, Mã khôi phục của bạn.");
            }       
        );
    }
}

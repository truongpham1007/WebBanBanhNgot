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

    public function getTimkiemAjax(Request $req){
        $sanpham = DB::table('tbl_product')->where('product_id', $req->value)->get();
        $output = '<div class="row">';
        foreach($sanpham as $product)
        {
            $output .= '<div class="col-sm-4">
                <div class="single-item">';
                    if($product->product_promotion_price != 0)
                    $output .= '<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>';
                $output .='
                    <div class="single-item-header">
                        <a href="/WebBanBanhNgot/MacEcommerce/public/product-detail/"'.$product->product_id.'"><img src="'.$product->product_image.'" alt=""
                            height="320px" width="270px"></a>
                    </div>
                    <div class="space10">&nbsp;</div>
                    <div class="single-item-body">
                        <p class="single-item-title">'.$product->product_name.'</p>
                        <div class="space10">&nbsp;</div>
                        <p class="single-item-price">';
                                                            
                        if($product->product_promotion_price==0)
                            $output .= '<span class="flash-sale" style="font-size: 25px;">'.number_format($product->product_unit_price).'Đ</span>
                            <div class="space35">&nbsp;</div>';

                        else
                            $output .= '<span class="flash-del" style="font-size: 25px;">'.number_format($product->product_unit_price).' Đ</span>
                            
                            <div class="space10">&nbsp;</div>
                            <span class="flash-sale" style="font-size: 25px;">
                            '.number_format($product->product_promotion_price).' Đ</span>';
                        $output .= 
                        '</p>

                        <div class="space20">&nbsp;</div>
                    </div>
                    <div class="single-item-caption">
                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                        <a class="beta-btn primary" href="/WebBanBanhNgot/MacEcommerce/public/product-detail/'.$product->product_id.'">Chi tiết<i class="fa fa-chevron-right"></i></a>
                        <div class="clearfix"></div>

                    </div>
                    <div class="space20">&nbsp;</div>
                </div>
            </div>';
        }
        $output .= '</div>';
        echo $output;
    }

    public function getContact(){
        return view('pages.contact');
    }
    public function addContact(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['contact_desc'] = $request->desc;
        $data['email'] = $request->email;
        $data['title'] = $request->title;

        DB::table('contacts')->insert($data);
       
        return redirect()->back()->with(['thanhcong' => 'Gửi thành công!!!']);
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

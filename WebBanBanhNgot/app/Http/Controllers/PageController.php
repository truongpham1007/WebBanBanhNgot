<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\User;
use Hash;
use App\Bill;
use App\News;
use App\BillDetail;
use App\ProductType;
use Session;
use App\Customer;

class PageController extends Controller
{
    public function getIndex()
    {
    	$slide = Slide::all();
    	$new_product = Product::where('new',1)->paginate(8);
    	$sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp()
    {
        return view('page.loai_sanpham');
    }

    public function getProductDetail()
    {
        return view('page.chitiet_sanpham');
    }
    public function getContact()
    {
        return view('page.lienhe');
    }
    public function getAbout()
    {
        return view('page.gioithieu');
    }
     public function getLogin()
    {
        return view('page.dangnhap');
    }
    public function getRegister()
    {
        return view('page.dangki');
    }
    public function postRegister(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không khớp'

            ]);
        $user  = new User();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');


    }
}

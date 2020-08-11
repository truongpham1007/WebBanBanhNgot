<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CommentController extends Controller
{
    public function save_comment(Request $request){
        
    	$data = array();
    	$data['product_id'] = $request->product_id;
    	$data['comment_desc'] = $request->desc;
    	$data['id'] = $request->id;
    	DB::table('tbl_comments')->insert($data);
    
    	return redirect()->back();
    }
    public function user_comment($id){
    	  $all_comment = DB::table('tbl_comments')->join('users','users.id','=','tbl_comments.id')->join('tbl_product','tbl_product.product_id','=','tbl_comments.product_id')->where('tbl_comments.id',$id)->get();
    	  return view('admin.user_comment')->with('all',$all_comment);
    }
    public function delete_user_comment($id){
      
        DB::table('tbl_comments')->where('comment_id',$id)->delete();
        
        return redirect()->back()->with(['thanhcong' => 'Xóa thành công!!!']);
    }
}

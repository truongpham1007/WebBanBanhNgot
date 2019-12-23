<?php

namespace App\Http\Controllers;
use DB;
use Carbon;

use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    function index()
    {
     return view('pages.search');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('tbl_product')
        ->where('product_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li value="'.$row->product_id.'"><a href="javascript:void(0)" >'.$row->product_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    function PostBrand(Request $request){
       $cat_name = $request->cat_name;
       $add_cat = DB::table('tbl_brand')->insert([
        'brand_name' => $cat_name,
        'brand_desc' => 1,
        'brand_status' => 1,
      
      ]);
      if($add_cat){
        echo "done";
      }else{
        echo "error";
      }
      
    }
      public function saveCategory(Request $request){
      $cat_name = $request->cat_name;
      $id = $request->id;
      if(isset($id)){
      $add_cat = DB::table('tbl_brand')->where('id',$id)
      ->update([
        'brand_name' => $cat_name,
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

      ]);
      if($add_cat){
        echo "done";
      }else{
        echo "error";
      }
    }else{
      $add_cat = DB::table('tbl_brand')->insert([
        'brand_name' => $cat_name,
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

      ]);
      if($add_cat){
        echo "done";
      }else{
        echo "error";
      }
    }
    }
}

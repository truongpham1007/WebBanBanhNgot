@extends('admin_layout')
@section('admin_content')   
<div class="col-md-12 compose-right">
                    <div class="inbox-details-default" >
                        <div class="inbox-details-heading">
                            Cập  nhật sản phẩm
                        </div>
                        <?php
                        $message = Session::get('message');
                        if($message){
                        echo '<div class="alert alert-success alert-dismissable">';
                        echo '<span>'.$message.'</span>';
                        echo '</div>';
                        Session::put('message',null);
                        }
                        ?>
                        
                        <div class="inbox-details-body"> 
                         @foreach($edit_product as $key => $pro)                         
                            <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="product_name" id="exampleInputEmail1"  value="{{$pro->product_name}}">
                                </div>                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá gốc</label>
                                    <input type="number" name="product_unit_price" class="form-control" id="exampleInputEmail1" value="{{$pro->product_unit_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khuyễn mãi</label>
                                    <input type="number" name="product_promotion_price" class="form-control" id="exampleInputEmail1"  value="{{$pro->product_promotion_price}}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="text" name="product_image" class="form-control" id="exampleInputEmail1"
                                     value="{{$pro->product_image}}">
                                    <img src="{{$pro->product_image}}" height="100px" width="100px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1"  >{{$pro->product_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content" id="exampleInputPassword1">{{$pro->product_content}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Thương hiệu</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                            </form>
                         @endforeach
                        </div>
                        
                        

                    </div>
                </div>
                
        
          <div class="clearfix"> </div>  
@endsection
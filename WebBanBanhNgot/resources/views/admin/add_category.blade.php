@extends('admin_layout')
@section('admin_content')
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
                        <header class="panel-heading">Thêm sản phẩm</header>
                        <?php
                           
                            $message = Session::get('message');
                            if($message == true)
                            {
                                  echo '<p  style="color : red;text-align:center;margin-top:20px ">'.$message.'</p>';
                                Session::put($message,null);
                            }   
                            
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá gốc</label>
                                    <input type="number" name="category_product_unit_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khuyến mãi</label>
                                    <input type="number" name="category_product_promotion_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link ảnh sảnh phẩm</label>
                                    <input type="text" name="category_product_image" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn vị</label>
                                    <input type="text" name="category_product_unit" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Là hàng mới</label>
                                    <select name="category_product_new" class="form-control input-lg m-bot15">
                                        <option value="1">Hàng mới</option>
                                        <option value="0">Đã có</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại</label>
                                    <select name="category_product_type" class="form-control input-lg m-bot15">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>   
                                    </select>
                                </div>
                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Hiển thi</label>
                                    <select name="category_product_status" class="form-control input-lg m-bot15">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea type="text" style="resize: none" rows="8" name="category_product_desc" class="form-control"  placeholder="Password"></textarea> 
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
         </section>
    </div>    
</div>

@endsection
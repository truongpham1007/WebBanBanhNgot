@extends('admin_layout')
@section('admin_content')	
<div class="col-md-12 compose-right">
					<div class="inbox-details-default" >
						<div class="inbox-details-heading">
							Thêm sản phẩm
						</div>
						
						<div class="inbox-details-body">
							
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" id="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá gốc</label>
                                    <input type="number" id="product_unit_price" class="form-control" id="exampleInputEmail1" placeholder="Giá gốc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khuyễn mãi</label>
                                    <input type="number" id="product_promotion_price" class="form-control" id="exampleInputEmail1" placeholder="Tên giá khuyễn mãi">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="text" id="product_image" class="form-control" id="exampleInputEmail1"
                                    placeholder="Link ảnh sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" id="product_desc" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" id="product_content" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select id="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Thương hiệu</label>
                                      <select id="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select id="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" id="btn_add_product" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                                
                            </div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>  
@endsection

@section('script')
    <script>
        $(document).ready(function(){
         
          $("#btn_add_product").click(function(){            
            var product_name = $("#product_name").val();
            var product_promotion_price = $("#product_promotion_price").val();
            var product_unit_price = $("#product_unit_price").val();
            var product_desc = $("#product_desc").val();
            var product_content = $("#product_content").val();
            var category_id = $("#product_cate").val();
            var brand_id = $("#product_brand").val();
            var product_status = $("#product_status").val();
            var product_image = $("#product_image").val();
           

            if(product_name == '' || product_promotion_price == '' || product_unit_price==''|| product_desc == '' || product_content == '' || category_id=='' || brand_id==''|| product_status == '' || product_image == ''){
                swal("Lỗi!", "Vui lòng điền đầy đủ thông tin!", "error", {
                    button: "Yes!",
                });
            }
            
            $.ajax({
              url: "{{route('save-product')}}",
              method: "GET",
              data:{product_name:product_name, product_promotion_price:product_promotion_price,product_unit_price:product_unit_price,product_desc:product_desc,product_content,product_content,category_id:category_id,brand_id:brand_id,product_status:product_status,product_image:product_image},
              
              success:function(data){
                swal("Hoàn tất!", "Thêm thành công loại sản phẩm!", "success", {
                    button: "Yes!",
                });
              }
            });
          });

         var auto_refresh = setInterval(
            function(){
              $('#category').load('add.brand').fadeIn("slow");
            },100);
        });
    </script>

@endsection 
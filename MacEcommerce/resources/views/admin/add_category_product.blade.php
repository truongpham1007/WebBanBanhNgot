@extends('admin_layout')
@section('admin_content')	
<div class="col-md-12 compose-right">
					<div class="inbox-details-default" >
						<div class="inbox-details-heading">
							Thêm loại sản phẩm
						</div>
						<div class="inbox-details-body">
							
								
								<div class="form-group">
									<label>Tên loại sản phẩm</label>
									<input type="text" id="category_product_name">
								</div>
								<div class="form-group">
									<label >Mô tả loại sản phẩm</label>
									<textarea rows="6" id="category_product_desc"> </textarea>
								</div>								
								<div class="form-group">
									<label>Hiển thị</label>
									  <select id="category_product_status" class="form-control input-sm m-bot15">
											<option value="1">Hiển thị</option>
											<option value="0">Ẩn</option>
											
									</select>
								</div>
								<input type="submit" id="btn_add_cate" value="Thêm danh mục "> 
							
						</div>
					</div>
				</div>
		
		  <div class="clearfix"> </div>  
@endsection
@section('script')
	<script>
		$(document).ready(function(){
		 
		  $("#btn_add_cate").click(function(){
		   
		    var cate_name = $("#category_product_name").val();
		    var cate_desc = $("#category_product_desc").val();
		    var cate_stt = $("#category_product_status").val();

		    if(cate_name == '' || cate_desc == '' || cate_stt==''){
		    	swal("Lỗi!", "Vui lòng điền đầy đủ thông tin!", "error", {
  					button: "Yes!",
				});
		    }
		    

		    $.ajax({
		      url: "{{route('save-category-product')}}",
		      method: "GET",
		      data:{cate_name:cate_name, cate_desc:cate_desc, cate_stt:cate_stt},
		      
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
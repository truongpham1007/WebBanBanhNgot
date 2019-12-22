@extends('admin_layout')
@section('admin_content')	
<div class="col-md-12 compose-right">
					<div class="inbox-details-default" >
						<div class="inbox-details-heading">
							Cập nhật danh mục sản phẩm
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
						 @foreach($edit_category_product as $key => $edit_value)
						<div class="inbox-details-body">
							
								<div class="form-group">
									<label>Tên danh mục</label>
									<input type="text" id="category_product_name" value="{{$edit_value->category_name}}">
								</div>
								<div class="form-group">
									<label >Mô tả danh mục</label>
									<textarea rows="6" id="category_product_desc" > {{$edit_value->category_desc}}</textarea>
								</div>								
								<input type="hidden" id="category_product_id" value="{{$edit_value->category_id}}">
								<input type="submit" id="btn_update_cate" value="Cập nhật danh mục "> 
							
						</div>
						@endforeach
					</div>
				</div>
    	
          <div class="clearfix"> </div>  
@endsection
@section('script')
	<script>
		$(document).ready(function(){
		 
		  $("#btn_update_cate").click(function(){
		   
		    var cate_name = $("#category_product_name").val();
		    var cate_desc = $("#category_product_desc").val();
		    var cate_id = $("#category_product_id").val();
		    if(cate_name == '' || cate_desc == ''){
		    	swal("Lỗi!", "Vui lòng điền đầy đủ thông tin!", "error", {
  					button: "Yes!",
				});
		    }
		    

		    $.ajax({
		      url: "{{route('update-cate')}}",
		      method: "GET",
		      data:{cate_name:cate_name, cate_desc:cate_desc, cate_id:cate_id},
		      
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
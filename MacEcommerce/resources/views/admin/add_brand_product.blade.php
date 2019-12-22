@extends('admin_layout')
@section('admin_content')	

<div class="col-md-12 compose-right">
					<div class="inbox-details-default" >
						<div class="inbox-details-heading">
							Thêm  thương hiệu
						</div>
						<div class="inbox-details-body">
							
								
								<div class="form-group">
									<label>Tên thương hiệu</label>
									<input type="text" id="brand_product_name">
								</div>
								<div class="form-group">
									<label >Mô tả thương hiệu</label>
									<textarea rows="6" id="brand_product_desc"> </textarea>
								</div>								
								<div class="form-group">
									<label>Hiển thị</label>
                                      <select id="brand_product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>
                                            
                                    </select>
								</div>
								<input type="submit" id="btn"   value="Thêm thương hiệu "> 
							
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>  
@endsection

@section('script')
	<script>
		$(document).ready(function(){
		 
		  $("#btn").click(function(){
		    var cat_name = $("#brand_product_name").val();
		    var cat_desc = $("#brand_product_desc").val();
		    var cat_stt = $("#brand_product_status").val();
		    if(cat_name == '' || cat_desc == '' || cat_stt==''){
		    	swal("Lỗi!", "Vui lòng điền đầy đủ thông tin!", "error", {
  					button: "Yes!",
				});
		    }
		    else{
		    	$.ajax({
		      url: "{{route('postbrandAjax')}}",
		      method: "GET",
		      data:{cat_name:cat_name, cat_desc:cat_desc, cat_stt:cat_stt},
		      
		      success:function(data){
		      	swal("Hoàn tất!", "Thêm thành công thương hiệu!", "success", {
  					button: "Yes!",
				});
		      }
		    });
		    }

		    
		  });

		 var auto_refresh = setInterval(
		    function(){
		      $('#category').load('add.brand').fadeIn("slow");
		    },100);
		});
	</script>
	
@endsection 


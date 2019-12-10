@extends('admin_layout')
@section('admin_content')	
<div class="col-md-12 compose-right">
					<div class="inbox-details-default" >
						<div class="inbox-details-heading">
							Thêm loại sản phẩm
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
							<form class="com-mail" action="{{URL::to('/save-category-product')}}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label>Tên loại sản phẩm</label>
									<input type="text" name="category_product_name">
								</div>
								<div class="form-group">
									<label >Mô tả loại sản phẩm</label>
									<textarea rows="6" name="category_product_desc"> </textarea>
								</div>								
								<div class="form-group">
									<label>Hiển thị</label>
									  <select name="category_product_status" class="form-control input-sm m-bot15">
											<option value="0">Ẩn</option>
											<option value="1">Hiển thị</option>
											
									</select>
								</div>
								<input type="submit" value="Thêm danh mục "> 
							</form>
						</div>
					</div>
				</div>
		
		  <div class="clearfix"> </div>  
@endsection
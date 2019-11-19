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
							<form class="com-mail" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label>Tên danh mục</label>
									<input type="text" name="category_product_name" value="{{$edit_value->category_name}}">
								</div>
								<div class="form-group">
									<label >Mô tả danh mục</label>
									<textarea rows="6" name="category_product_desc" > {{$edit_value->category_desc}}</textarea>
								</div>								
							
								<input type="submit" value="Cập nhật danh mục "> 
							</form>
						</div>
						@endforeach
					</div>
				</div>
    	
          <div class="clearfix"> </div>  
@endsection
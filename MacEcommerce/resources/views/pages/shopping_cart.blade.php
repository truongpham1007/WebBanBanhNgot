@extends('layout')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Giỏ hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                  
                                <div id="content">
			
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<?php
					$content = Cart::content();
					

				?>
				
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-name">Hình ảnh</th>
							<th class="product-price">Giá</th>
							<th class="product-status">Trạng thái</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng tiền</th>
							<th class="product-remove">Xóa</th>
						</tr>
					</thead>
					<tbody>
					@foreach($content as $v_content => $product)
						<tr class="cart_item">
							<td class="product-name"  >
								<div class="media" >
									<img class="pull-left" src="{{$product->product_image}}" alt="" >
									<div class="media-body">
										<p class="font-large table-title">{{$product->name}}</p>
									</div>
								</div>
							</td>
							<td class="product-image">
								<img src="{{$product->options->image}}"  alt="">
								
							</td>

							<td class="product-price">
								<span class="amount">{{number_format($product->price)}}</span>
								
							</td>

							<td class="product-status">
								Còn hàng
							</td>

							<td class="product-quantity">
								<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$product->qty}}"  >
									<input type="hidden" value="{{$product->rowId}}" name="rowId_cart" class="form-control">
									<div class="space10">&nbsp;</div>
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
								</form>
							</td>

							<td class="product-subtotal">
								<span class="amount">
									<?php
									$subtotal = $product->price * $product->qty;
									echo number_format($subtotal);
									?>
								</span>
							</td>

							<td class="product-remove">
								<a href="{{URL::to('/delete-to-cart/'.$product->rowId)}}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
					@endforeach
					</tbody>

					<tfoot>
						<tr >
							<td colspan="7" class="actions">
								<p style="font-size: 20px;" ><b>Tổng tiền :&nbsp </b>{{Cart::subtotal().' '.'vnđ'}}</p>
								<div class="space10">&nbsp;</div>
								<p style="font-size: 20px;"><b>Phí vận chuyển : &nbsp </b>Free Ship</p>
								<div class="space10">&nbsp;</div>
								<p style="font-size: 20px; color: red"><b>Tổng : &nbsp </b> {{Cart::subtotal().' '.'vnđ'}}</p>
							</td>

							
						</tr>
						<tr>
							<td colspan="7" class="actions">
								<a href="{{URL::to('/home')}}" class="beta-btn primary" name="proceed">Tiếp tục mua <i class="fa fa-chevron-right"></i></a>
								<!-- <button type="submit" class="beta-btn primary" name="update_cart">Cập nhật giỏ hàng <i class="fa fa-chevron-right"></i></button>  -->
								<a href="{{URL::to('/checkout')}}" class="beta-btn primary" name="proceed">Mua hàng<i class="fa fa-chevron-right"></i></a>

							</td>
						</tr>
					</tfoot>
				</table>			
			</div>			
			</div>
		</div> <!-- #content -->
                                <?php
                            }else{
                                 ?>
                                 <div class="space60">&nbsp;</div>
                                 <p style="color: red; font-size: 20px;">*Vui lòng <a href="{{URL::to('/register')}}">  <u style="color: blue;">đăng nhập tại đây</u> </a> để tiếp tục mua hàng </p>
                                 <?php 
                             }
                                 ?>
		
		<div class="space60">&nbsp;</div>
		<div class="space60">&nbsp;</div>
		<div class="space60">&nbsp;</div>
		<div class="space60">&nbsp;</div>
		<div class="clearfix"></div>
	</div> <!-- .container -->
@endsection
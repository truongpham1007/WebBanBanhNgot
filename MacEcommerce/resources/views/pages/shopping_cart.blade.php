@extends('layout')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Shopping Cart</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
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
							<td class="product-name">
								<div class="media">
									<img class="pull-left" src="{{$product->product_image}}" alt="">
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
								<input type="number" name="product_qty" value="{{$product->qty}}">
							</td>

							<td class="product-subtotal">
								<span class="amount">{{Cart::subtotal()}}</span>
							</td>

							<td class="product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
					@endforeach
					</tbody>

					<tfoot>
						<tr>
							<td colspan="6" class="actions">

								
								
								<button type="submit" class="beta-btn primary" name="update_cart">Update Cart <i class="fa fa-chevron-right"></i></button> 
								<button type="submit" class="beta-btn primary" name="proceed">Proceed to Checkout <i class="fa fa-chevron-right"></i></button>
							</td>
						</tr>
					</tfoot>
				</table>
				<!-- End of Shop Table Products -->
			</div>


			<!-- Cart Collaterals -->
			
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
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
								<p style="font-size: 20px;">{{$product->qty}}</p>
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
						<form action="{{URL::to('/order-place')}}" method="post">
							{{csrf_field()}}
						<tr >
							<td colspan="7" class="actions">
								<p>Hình thức thanh toán</p>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input name="payment_option" type="radio" class="input-radio" name="payment_method" value="2" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input name="payment_option" type="radio" class="input-radio" name="payment_method" value="1" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>		
							</div>
								<p style="font-size: 20px;" ><b>Tổng tiền :&nbsp </b>{{Cart::subtotal().' '.'vnđ'}}</p>
								<div class="space10">&nbsp;</div>
								<p style="font-size: 20px;"><b>Phí vận chuyển : &nbsp </b>Free Ship</p>
								<div class="space10">&nbsp;</div>
								<p style="font-size: 20px; color: red"><b>Tổng : &nbsp </b> {{Cart::subtotal().' '.'vnđ'}}</p>
								<div class="space20">&nbsp;</div>
								<button class="beta-btn primary" type="submit" name="proceed">Thanh toán<i class="fa fa-chevron-right"></i></button>
							</td>

							
						</tr>
						</form>
						
					</tfoot>
				</table>			
			</div>	

		</div> <!-- #content -->
                                
		
		
		<div class="clearfix"></div>
	</div> <!-- .container -->
@endsection
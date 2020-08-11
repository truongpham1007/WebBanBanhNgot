@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Thông tin người mua </h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                   
                                    
                                    <tbody>
                                        <tr>
                                           <th>Tên khách hàng</th>
                                             <th>Số điện thoại</th>

                                                                                           
                                        </tr>
                                        
                                        <tr class="unread checked">   
                                             <td>{{$order_by_id->name}}</td>
                                             <td>{{$order_by_id->phone}}</td>

                                            
                                           
                                          
                                        </tr>

                                       
                                       

                                    </tbody>
                                    
                                </table>
                   
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"> </div>
                     <h2>Thông tin vận chuyển</h2>
                     <br>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                   
                                    
                                    <tbody>
                                        <tr>
                                            <th>Tên người vận chuyển</th>
                                            <th>Tên số lượng hàng</th>
                                            
                                            <th>Đại chỉ</th>
                                            <th>Số tiền</th>
                                            <th>Số điện thoại</th>
                                                                                           
                                        </tr>
                                        
                                        <tr class="unread checked">   
                                             <td>{{$order_by_id->shipping_name}}</td>
                                              <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
             <td>{{$order_by_id->order_total}}</td>
             <td>{{$order_by_id->shipping_phone}}</td>
                                           
                                          
                                        </tr>

                                       
                                       

                                    </tbody>
                                    
                                </table>
                   
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
@endsection
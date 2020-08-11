@extends('layout')
@section('content')
<div class="inbox">
    <div class="space50">&nbsp;</div>

                    <h2>Liệt kê đơn hàng</h2>
                     <div class="space50">&nbsp;</div>   

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                    <?php
                                    $message = Session::get('message');
                                     if($message){
                                     echo '<div class="alert alert-success alert-dismissable">';
                                     echo '<span>'.$message.'</span>';
                                     echo '</div>';
                                     Session::put('message',null);
                                     }
                                     ?>
                                    
                                    <tbody>
                                        <tr>
                                           <th>Tên người đặt</th>
                                             <th>Tổng giá tiền</th>
                                             <th>Tình trạng</th>
                                              <th>Hiển thị</th>                                                                               
                                        </tr>
                                         @foreach($all_order as $key => $cate_pro)
                                         @if($cate_pro->order_status == 'Đang chờ xử lý')
                                        <tr class="unread checked">   
                                            <td>
                                                {{$cate_pro->name}}
                                            </td>                                                                                    
                                            <td>
                                                {{$cate_pro->order_total}} vnđ
                                            </td>
                                             <td>
                                                {{$cate_pro->order_status}}
                                            </td>
                                            
                                           
                                            <td>
                                                 
                                               <span>{{$cate_pro->create_at}}</span>
                                                </a>
                                            </td>
                                        </tr>

                                        @endif
                                        @endforeach

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
                    <br>
                    <br>
                    <br>
                    <br>
@endsection
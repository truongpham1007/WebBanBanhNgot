@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê hóa đơn</h2>

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
                                        <tr class="unread checked">   
                                            <td>
                                                {{$cate_pro->customer_name}}
                                            </td>                                                                                    
                                            <td>
                                                {{$cate_pro->order_total}} vnđ
                                            </td>
                                             <td>
                                                {{$cate_pro->order_status}}
                                            </td>
                                            
                                           
                                            <td>
                                                 <a href="{{URL::to('/view-order/'.$cate_pro->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <span>Chi tiết</span></a>
                                                <span>/</span>
                                                <a  onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-order/'.$cate_pro->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <span>Xóa</span>
                                                </a>
                                            </td>
                                        </tr>

                                       
                                        @endforeach

                                    </tbody>
                                    
                                </table>
                   
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"> </div>
                </div>
@endsection
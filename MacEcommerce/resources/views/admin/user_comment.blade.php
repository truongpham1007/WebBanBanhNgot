@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê User</h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                   @if(Session('thanhcong'))
                        <div class="alert alert-success">{{Session('thanhcong')}}</div>
                    @endif
                                    
                                    <tbody>
                                        <tr>
                                            
                                            <th>Tên phẩm</th>
                                            <th>Comment</th>
                                            <th>Thao tác</th>                                                                                 
                                        </tr>
                                         @foreach($all as $key => $cate_pro)
                                        <tr class="unread checked">   
                                            <td>
                                                {{$cate_pro->product_name}}
                                            </td>                                                                                    
                                            <td>
                                                {{$cate_pro->comment_desc}}
                                            </td>
                                           
                                            <td>
                                                
                                                <a  onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-user-comment/'.$cate_pro->id)}}" class="active styling-edit" ui-toggle-class="">
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
                    <br>
                </div>
@endsection


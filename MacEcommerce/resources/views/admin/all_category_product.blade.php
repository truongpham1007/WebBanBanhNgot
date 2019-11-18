@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê sản phẩm</h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                    <tbody>
                                        <tr>
                                            <th>Tên danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Desc</th>
                                            <th>Thao tác</th>
                                            
                                            

                                        </tr>
                                        <tr class="unread checked">
                                            
                                            
                                            <td>
                                                Lorem Ipsum is simply
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply
                                            </td>
                                            <td>
                                                <span>Sửa/</span> <span>Xóa</span>
                                            </td>
                                        </tr>
                                       
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"> </div>
                </div>
@endsection
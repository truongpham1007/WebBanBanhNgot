@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê sản phẩm</h2>

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
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Desc</th>
                                            <th>Thao tác</th>                                                                                 
                                        </tr>
                                         @foreach($all_brand_product as $key => $cate_pro)
                                        <tr class="unread checked">   
                                            <td>
                                                {{$cate_pro->brand_id}}
                                            </td>                                                                                    
                                            <td>
                                                {{$cate_pro->brand_name}}
                                            </td>
                                            <td>
                                            <?php
                                                if($cate_pro->brand_status==0){
                                            ?>
                                                    <a href="{{URL::to('/unactive-brand-product/'.$cate_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                            <?php
                                                }else{
                                            ?>  
                                                    <a href="{{URL::to('/active-brand-product/'.$cate_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                            <?php
                                                }
                                            ?>
                                            </td>
                                            <td>
                                                {{$cate_pro->brand_desc}}
                                            </td>
                                            <td>
                                                 <a href="{{URL::to('/edit-brand-product/'.$cate_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <span>Sửa</span></a>
                                                <span>/</span>
                                                <a  onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-brand-product/'.$cate_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
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
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
                                    
                                   
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá gốc</th>
                                            <th>Giá khuyến mãi</th>
                                            <th>Hình sản phẩm</th>
                                            <th>Danh mục</th>
                                            <th>Thương hiệu</th>
                                            <th>Hiển thị</th>  
                                            <th>Thao tác</th>                                                                                  
                                        </tr>
                                        <tbody>
                                            @foreach($all_product as $key => $pro)
                                                <tr>           
                                                   <td>{{ $pro->product_name }}</td>
                                                    <td>{{ number_format($pro->product_unit_price) }} </td>
                                                    <td>{{ number_format($pro->product_promotion_price) }} </td>
                                                    <td><img src="{{ $pro->product_image }}" height="100" width="100"></td>
                                                    <td>{{ $pro->category_name }}</td>
                                                    <td>{{ $pro->brand_name }}</td>

                                                    <td><span class="text-ellipsis">
                                                    <?php
                                                    if($pro->product_status==0){
                                                        ?>
                                                        <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa                                       fa-thumbs-up"></span></a>
                                                        <?php
                                                        }else{
                                                        ?>  
                                                        <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling                                    fa                                fa-thumbs-down"></span></a>
                                                        <?php
                                                    }
                                                    ?>
                                                    </span></td>
           
                                                <td>
                                                    <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                                    <span>Sửa</span></a>
                                                    <span>/</span>
                                                    <a  onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-product/'.$pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
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
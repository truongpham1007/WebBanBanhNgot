@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê sản phẩm</h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border">
                                
                                    
                                     <div id="divCheckbox" style="visibility: hidden; display:inline;"> {{$row=1}}</div>
                                    
                                   
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
                                                    <a  id="btn_remove_product"  onclick="RemoveProduct({{$row}},{{$pro->product_id}})" href="javascrip:void(0)" class="active styling-edit" ui-toggle-class="">
                                                    <span>Xóa</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <div id="divCheckbox" style="visibility: hidden; display:inline;"> {{$row++}}</div>
                                    @endforeach
                                    </tbody>                               
                                </table>         
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"> </div>
                </div>
@endsection
@section('script')
    <script>
        function RemoveProduct(idRow,idPro){
           $.ajax({
            url: "{{route('delete-product')}}",
            method: "GET",
            data: {idPro:idPro},
            success: function(data){
                swal("Hoàn tất!", "Xóa sản phẩm thành công!", "success", {
                    button: "Yes!",
                });
                document.getElementById('table-cate').deleteRow(idRow);
            }
           })
        }
    </script>
    
    
@endsection 
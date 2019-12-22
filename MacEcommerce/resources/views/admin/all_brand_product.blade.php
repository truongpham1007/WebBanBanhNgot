@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê thương hiệu sản phẩm</h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border" id="myTable">
                                   
                                    
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Desc</th>
                                            <th>Thao tác</th>                                                                                 
                                        </tr>
                                         <div id="divCheckbox" style="visibility: hidden; display:inline;"> {{$row = 1}}</div>
                                        
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
                                                 <a href="#" class="active styling-edit" ui-toggle-class="">
                                                <span>Sửa</span></a>
                                                <span>/</span>
                                                <a  id="btn_remove_brand"  onclick="RemoveBrand({{$row}},{{$cate_pro->brand_id}})" href="javascrip:void(0)" class="active styling-edit" ui-toggle-class="">

                                                <span >Xóa</span>
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
@endsection
@section('script')
    <script>
        function RemoveBrand(idRow,idBrand){
           $.ajax({
            url: "{{route('delete-brand-product')}}",
            method: "GET",
            data: {idBrand:idBrand},
            success: function(data){
                swal("Hoàn tất!", "Xóa thành công thương hiệu!", "success", {
                    button: "Yes!",
                });
                document.getElementById('myTable').deleteRow(idRow);
            }
           })
        }
    </script>
    
@endsection 
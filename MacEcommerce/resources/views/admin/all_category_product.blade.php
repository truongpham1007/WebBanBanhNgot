@extends('admin_layout')
@section('admin_content')
<div class="inbox">
                    <h2>Liệt kê loại sản phẩm</h2>

                    <div class="col-md-12 mailbox-content  tab-content tab-content-in">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class="mailbox-border">

                                <table class="table tab-border" id="table-cate">
                                   
                                    
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Desc</th>
                                            <th>Thao tác</th>  
                                         <div id="divCheckbox" style="visibility: hidden; display:inline;"> {{$row=1}}</div>
                                                                               
                                        </tr>
                                         @foreach($all_category_product as $key => $cate_pro)
                                        <tr class="unread checked">   
                                            <td>
                                                {{$cate_pro->category_id}}
                                            </td>                                                                                    
                                            <td>
                                                {{$cate_pro->category_name}}
                                            </td>
                                            <td>
                                            <?php
                                                if($cate_pro->category_status==0){
                                            ?>
                                                    <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                            <?php
                                                }else{
                                            ?>  
                                                    <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                            <?php
                                                }
                                            ?>
                                            </td>
                                            <td>
                                                {{$cate_pro->category_desc}}
                                            </td>
                                            <td>
                                                 <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <span>Sửa</span></a>
                                                <span>/</span>
                                                <a  id="btn_remove_brand"  onclick="RemoveCate({{$row}},{{$cate_pro->category_id}})" href="javascrip:void(0)" class="active styling-edit" ui-toggle-class="">
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
@section('script')
    <script>
        function RemoveCate(idRow,idCate){
           $.ajax({
            url: "{{route('delete-category-product')}}",
            method: "GET",
            data: {idCate:idCate},
            success: function(data){
                swal("Hoàn tất!", "Xóa thành công thương hiệu!", "success", {
                    button: "Yes!",
                });
                document.getElementById('table-cate').deleteRow(idRow);
            }
           })
        }
    </script>
    
@endsection 
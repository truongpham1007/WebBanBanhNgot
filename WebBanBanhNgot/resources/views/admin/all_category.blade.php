@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">Liệt kê danh mục sản phẩm</div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <?php
                           
        $message = Session::get('message');
        if($message == true)
        {
              echo '<p  style="color : red;text-align:center;margin-top:20px ">'.$message.'</p>';
            Session::put('message',null);
        }   
                            
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên</th>
            <th>Giá gốc</th>
            <th>Giá khuyến mãi</th>
            <th>Loại</th>
            <th>Đơn vị</th>
            <th>Ảnh</th>
            <th>Hiển thị</th>
            <th>Desc</th>
            <th>Hàng mới</th>
            <th>Thao tác</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_category_product as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$cate_pro ->category_name}}</td>
            <td><span class="text-ellipsis">{{$cate_pro-> category_unit_price}}</span></td>
            <td><span class="text-ellipsis">{{$cate_pro->category_promotion_price}}</span></td>
            <td><span class="text-ellipsis">{{$cate_pro->category_type}}</span></td>
            <td><span class="text-ellipsis">{{$cate_pro->category_unit}}</span></td>
            <td><span class="text-ellipsis"><img src="{{$cate_pro->category_image}}" height = 50px width =50px alt = ""></span></td>
            <td><span class="text-ellipsis">
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
              </span></td>
            <td><span class="text-ellipsis">{{$cate_pro->category_desc}}</span></td>
            <td><span class="text-ellipsis">
              <?php
              if($cate_pro ->category_new==1){

                echo '<span class = "glyphicon glyphicon-ok"></span>';
              }
              
              ?>
              </span></td>
            <td>
             <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}">Sửa</a> / <a  onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}">Xóa</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
           
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
           
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
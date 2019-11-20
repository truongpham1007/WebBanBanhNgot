@extends('admin_layout')
@section('admin_content')
<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
          <span><a href="#">
              <div class="col-md-8 market-update-left" >
               <h3>83</h3>
               <h4>Tổng số User</h4>   
              </div>
           </a>
          </span>
					
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <span><a href="#">
              <div class="col-md-8 market-update-left" >
               <h3>83</h3>
               <h4>Đơn hàng mới</h4>   
              </div>
           </a>
          </span>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<span><a href="#">
              <div class="col-md-8 market-update-left" >
               <h3>83</h3>
               <h4>Tin nhắn mới</h4>   
              </div>
           </a>
          </span>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
	</div>
	<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Thống kê hàng hóa
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                     
                                      <th>Loại hàng</th>
                                      <th>Quản lý</th>                                   
                                                                        
                                      <th>Trạng thái</th>
                                      <th>Số lượng</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              <tr>
                                 
                                  <td>Twitter</td>
                                  <td>Evan</td>                               
                                                                  
                                  <td><span class="label label-success">completed</span></td>
                                  <td><span class="badge badge-success">100%</span></td>
                              </tr>
                              <tr>
                                  
                                  <td>Google</td>
                                  <td>John</td>                                
                                  
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-warning">75%</span></td>
                              </tr>
                              <tr>
                                  
                                  <td>LinkedIn</td>
                                  <td>Danial</td>                                 
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-info">65%</span></td>
                              </tr>
                              <tr>
                                  
                                  <td>Tumblr</td>
                                  <td>David</td>                                
                                                                 
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-danger">95%</span></td>
                              </tr>
                              <tr>
                                  
                                  <td>Tesla</td>
                                  <td>Mickey</td>                                  
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      

     <div class="clearfix"> </div>
</div>
@endsection
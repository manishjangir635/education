@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1302.12px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Users</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Users</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
 
         <div class="row">
            <div class="col-12">
                <form action="{{url('admin/email_template')}}" method="get">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">                        
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" name="name" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Subject:</label>
                                        <input type="text" name="subject" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary" value="Search">
                                        <a href="{{url('admin/email_template')}}" class="btn btn-primary"> Clear Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 125px;">
                                <a href="{{route('/add_users')}}" class="btn btn-success"> Add User</a>
                            </div>
                        </div>
                    </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Name</th>
                              <th>Shop Name</th>
                              <th>Email</th>
                              <th>Mobile No</th>
                              <th>Role</th>
                              <th>Created</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        if(count($all_data)>0){
                            $pagelimit = config("global.pagination_records");
                            $page = $all_data->currentPage() ;//$records->total();
                            $i = ($page * $pagelimit) - ($pagelimit);
                        ?>
                        @foreach($all_data as $data)
                        <?php $i++?>
                           <tr>
                                <td>{{$i}}</td>
                                <td>{{$data['name']}}</td>
                                <td>{{$data['shop_name']}}</td>
                                <td>{{$data['email']}}</td>
                                <td>{{$data['mobile_number']}}</td>
                                <td>@if($data['user_role_id'] == 2)
                                        Restaurant
                                    @elseif($data['user_role_id'] == 3)
                                        Retailer
                                    @endif
                                </td>
                                <td>{{$data['created_at']}}</td>
                                <td><a title="Edit" href="{{url('admin/email_template_edit/'.$data['id'])}}" class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                <a href="{{route('/email_template_delete',$data['id'])}}" data-delete="delete" class="delete_any_item btn btn-danger" title="Delete" data-confirm="Are you sure?"><span class="fas fa-trash-alt"></span></a>
                                </td>
                           </tr>

                        @endforeach
                        <?php } else {?>
                           <tr>
                              <td colspan="5"> No Record Found</td>
                           </tr>
                        <?php }?>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    </div>
               </div>
               <!-- /.card -->
            </div>
         </div>
         <!-- /.row -->
   
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
@include('admin.layout.footer')
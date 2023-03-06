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

            <form action="{{url('admin/users')}}" method="get">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">                        
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" value="{{request()->get('name')}}">
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Role </label>
                                        <select name="role" style="padding: 4px;">
                                        <option value="">Select Role</option>
                                        <option  @if(request()->get('role')=='teacher') selected @endif value="teacher">Teacher</option>
                                        <option @if(request()->get('role')=='student') selected @endif value="student">Student</option>
                                        </select>
                                    </div>
                                </div>
                              

                              
                                <div class="col-2  align-items-center">
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary" value="Filter">
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
                              <th>Email</th>
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
                                <td>{{$data['email']}}</td>
                                <td>@if($data['is_teacher'] == 1)
                                        Teacher
                                    @endif

                                    @if($data['is_student'] == 1)
                                        Student
                                     @endif   
                                </td>
                                <td>{{$data['created_at']}}</td>
                                <td><a title="Edit" href="{{url('/')}}/admin/edit_user/{{$data['id']}}" class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                <a href="{{url('/')}}/admin/delete_user/{{$data['id']}}" data-delete="delete" class="delete_any_item btn btn-danger" title="Delete" data-confirm="Are you sure?"><span class="fas fa-trash-alt"></span></a>
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
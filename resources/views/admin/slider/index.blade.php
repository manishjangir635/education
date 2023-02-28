@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1302.12px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Slider</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Slider</li>
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
              
               <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 125px;">
                                <a href="{{route('add_slider')}}" class="btn btn-success"> Add Slider</a>
                            </div>
                        </div>
                    </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Created</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                      
                        @foreach($sliders as $key=> $data)
                       
                           <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{$data->image}}" width="100"></td>
                                <td>{{$data->name}}</td>
                                <td>{{$data['created_at']}}</td>
                                <td><a title="Edit" href="{{route('edit_slider',$data->id)}}" class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                <a href="{{route('delete_slider',$data['id'])}}" data-delete="delete" class="delete_any_item btn btn-danger" title="Delete" data-confirm="Are you sure?"><span class="fas fa-trash-alt"></span></a>
                                </td>
                           </tr>

                        @endforeach
                    
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
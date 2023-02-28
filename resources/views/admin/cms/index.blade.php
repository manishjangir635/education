@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1302.12px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Cms Pages</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Cms</li>
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
           
                  <div class="card-body table-responsive p-0">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Title</th>
                              <th>Slug</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        
                        
                        @foreach($all_data as $key => $data)
                       
                           <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{$data['title']}}</td>
                                <td>{{$data['slug']}}</td>
                           
                                <td><a title="Edit" href="{{route('edit_cms_page',base64_encode($data['id']))}}" class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                </td>
                           </tr>

                        @endforeach


                        <?php 
                        
                        $about_us_data=DB::table('about_us')->first();
                        ?>
                          <tr>
                                <td>3</td>
                                <td>{{$about_us_data->title}}</td>
                                <td>{{$about_us_data->slug}}</td>
                                <td><a title="Edit" href="{{route('edit_about_us_page',base64_encode($about_us_data->id))}}" class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                </td>
                           </tr> 
                       
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

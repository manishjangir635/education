@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1302.12px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Video Managment</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Videos</li>
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
                 
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Course Name</th>
                              <th>Author</th>
                              <th>video Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                       
                       
                        @foreach($videos as $key => $video)
                        
                           <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$video->course_data->title}}</td>
                              <td>{{$video->user_data->name}}</td>
                              <td>{{$video->title}}</td>
                              <td><a target="blank" href="https://player.vimeo.com/video/{{$video->video}}">Watch Video</a> | <a href="{{route('approve_video', $video->id )}}">Approve</a> | <a href="{{route('reject_video', $video->id )}}">Reject</a> </td>
                              </td>
                           </tr>

                        @endforeach
                      
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        @include('pagination.index',['paginator' => $videos])
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
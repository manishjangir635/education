@include('admin.layout.header')

<style>

.approved{
   color: white;
    background: green;
    padding: 5px 6px;
    border-radius: 4px;
}

.rejected{
   color: white;
    background: red;
    padding: 5px 6px;
    border-radius: 4px;
}

</style>
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
              
            <form action="{{url('admin/video/index')}}" method="get">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">                        
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="text" name="name" placeholder="Enter Name" value="{{request()->get('name')}}">
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Teacher</label>
                                        <select name="author_id" style="padding: 4px;">
                                        <option value="">Select Teacher</option>
                                        @foreach($author_list as $author)

                                        <option value="{{$author->id}}" @if(request()->get('author_id')==$author->id) selected @endif>{{$author->name}}</option>
                                        @endforeach
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
                 
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th>Sr.</th>
                              <th>Course Name</th>
                              <th>Author</th>
                              <th>video Name</th>
                              <th>Date</th>
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
                              <td>{{$video->created_at}}</td>
                              <td><a target="blank" href="https://player.vimeo.com/video/{{$video->video}}">Watch Video</a> |
                              @if($video->status==1)
                              <a class="approved" href="#"> Approved</a>
                              @else
                              <a href="{{route('approve_video', $video->id )}}"> Approve</a>
                              @endif
                             
                               
                               | 

                               @if($video->status==2)
                              <a class="rejected" href="#"> Rejected</a>
                              @else
                              <a href="{{route('reject_video', $video->id )}}"> Reject</a>
                              @endif
                            
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
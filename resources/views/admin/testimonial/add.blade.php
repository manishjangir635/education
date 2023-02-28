@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Testimonial</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->

        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="{{route('save_testimonial')}}" method="post" enctype="multipart/form-data">
                    @csrf
            
                 <div class="form-group">
                  <label>Image</label>
                  <input class="form-control" type="file" name="image" >
                  {!!$errors->first("image", "<span class='text-danger'>:message</span>")!!}
                </div>

                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter name" value="">
                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
               

                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content"></textarea>
                </div>


                <div class="form-group">
                  <label>Rating</label>
                  <input class="form-control" type="number" name="rating" placeholder="Enter Rating" min="1" max="5">
                  {!!$errors->first("rating", "<span class='text-danger'>:message</span>")!!}
                </div>


                <button class="btn btn-primary" type="submit">Save</button>
                </form>
              </div>
            </div>
            <!-- /.row -->
          </div>

        </div>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('admin.layout.footer')

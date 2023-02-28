@include('admin.layout.header')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Cms</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Cms</li>
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
                <form action="{{route('update_about_us_page',base64_encode($record->id))}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                  <label>Title<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="title" placeholder="Enter title" value="{{$record->title}}">
                  {!!$errors->first("title", "<span class='text-danger'>:message</span>")!!}
                </div>

                <div class="form-group">
                <label>Description<span class="requireRed"></span></label>
                <textarea name="description" class="form-control">{{$record->description}}</textarea>
                </div>


                <div class="form-group">
                  <label>Page Title<span class="requireRed"></span></label>
                  <input class="form-control" type="text" name="page_title" placeholder="Enter Page title" value="{{$record->page_title}}">
                 
                </div>

                <div class="form-group">
                <label>Page Description<span class="requireRed"></span></label>
                <textarea name="page_description" class="form-control">{{$record->page_description}}</textarea>
                </div>

                <div class="form-group">
                <label>Content<span class="requireRed"></span></label>
                <textarea name="content" class="form-control">{{$record->content}}</textarea>
                </div>


                <div class="form-group">
                <label>Our Vision<span class="requireRed"></span></label>
                <textarea name="vision" class="form-control">{{$record->vision}}</textarea>
                </div>

                <div class="form-group">
                <label>Our Mission<span class="requireRed"></span></label>
                <textarea name="mission" class="form-control">{{$record->mission}}</textarea>
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

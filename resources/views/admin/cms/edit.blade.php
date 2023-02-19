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
                <form action="{{route('update_cms_page',base64_encode($record->id))}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                  <label>Title<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="title_en" placeholder="Enter title" value="{{$record->title_en}}">
                  {!!$errors->first("title_en", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="form-group">
                <label>Description<span class="requireRed"> * </span></label>
                <textarea name="content_en" class="form-control">{{$record->content_en}}</textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Meta Description<span class="requireRed"> * </span></label>
                  <textarea name="meta_description_en" class="form-control">{{$record->meta_description_en}}</textarea>
                </div>
                <!-- /.form-group -->
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

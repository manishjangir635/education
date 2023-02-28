@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Template</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Template</li>
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
                <form action="{{url('/admin/email_template_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$singleData->id}}">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$singleData->name}}">
                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Subject</label>
                  <input class="form-control" type="text" name="subject" placeholder="enter subject" value="{{$singleData->subject}}">
                  {!!$errors->first("subject", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Constant</label>
                    <select class="form-control constant" name="constant">
                        <option value=""> Select Option </option>
                        @foreach($constantData as $data)
                        <option value="{{$data}}">{{$data}}</option>
                        @endforeach
                    </select>
                    {!!$errors->first("constant", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="">
					        <a onclick = "return InsertHtml()" href="javascript:void(0)" class="btn  btn-success no-ajax pull-right"><i class="icon-white "></i>{{  trans("Insert Variable") }} </a>
                </div>
                <div class="form-group">
                  <label>Email Body</label>
                  <textarea class="form-control" id="body" name="body">{{$singleData->body}}</textarea>
                  {!!$errors->first("body", "<span class='text-danger'>:message</span>")!!}
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

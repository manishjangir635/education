@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <form action="{{route('/update_user',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                  <label>Name<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter user name" value="{{$user->name}}">
                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
             

                
                <div class="form-group">
                    <label>Is Teacher<span class="requireRed"> * </span></label>
                    <select class="form-control" name="is_teacher">
                        <option value="0" @if($user->is_teacher == 0) selected @endif> No </option>
                        <option value="1" @if($user->is_teacher == 1) selected @endif> Yes </option>
                    </select>
                    {!!$errors->first("is_teacher", "<span class='text-danger'>:message</span>")!!}

                </div>


                <div class="form-group">
                    <label>Active / In-active<span class="requireRed"> * </span></label>
                    <select class="form-control" name="is_active">
                        <option value="0" @if( $user->is_active == 0) selected @endif> Inactive </option>
                        <option value="1" @if($user->is_active == 1) selected @endif> Active </option>
                    </select>
                    {!!$errors->first("is_active", "<span class='text-danger'>:message</span>")!!}

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

@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
                <form action="{{route('/save_users')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                  <label>Name<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter user name" value="{{ old('name') }}">
                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
             
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email<span class="requireRed"> * </span></label>
                  <input class="form-control" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                  {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                </div>

                
                <div class="form-group">
                    <label>Is Teacher<span class="requireRed"> * </span></label>
                    <select class="form-control" name="is_teacher">
                        <option value="0" @if(old('is_teacher')== 0) selected @endif> No </option>
                        <option value="1" @if(old('is_teacher')== 1) selected @endif> Yes </option>
                        

                    </select>
                    {!!$errors->first("is_teacher", "<span class='text-danger'>:message</span>")!!}

                </div>
             
           
                <div class="form-group">
                    <label>Password<span class="requireRed"> * </span></label>
                    <input class="form-control" type="password" name="password" placeholder="Enter password">
                    {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}

                </div>

                <!-- /.form-group -->
                <div class="form-group">
                    <label>Confirm Password<span class="requireRed"> * </span></label>
                    <input class="form-control" type="password" name="confirm_password" placeholder="Enter confirm password">
                    {!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}

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

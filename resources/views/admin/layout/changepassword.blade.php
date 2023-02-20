@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
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
                <form action="{{url('/admin/saveChangePassword')}}" method="post">
                    @csrf
                <div class="form-group">
                  <label>Old Password</label>
                  <input class="form-control" type="password" name="old_password" placeholder="old password">
                  {!!$errors->first("old_password", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>New Password</label>
                  <input class="form-control" type="password" name="new_password" placeholder="new password">
                  {!!$errors->first("new_password", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input class="form-control" type="password" name="confirm_password" placeholder="confirm password">
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

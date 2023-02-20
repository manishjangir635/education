@include('admin.layout.header')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Cms</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Cms</li>
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
                  <label>User Name<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter user name" value="{{ old('name') }}">
                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="form-group">
                  <label>Shop Name<span class="requireRed"> * </span></label>
                  <input class="form-control" type="text" name="shop_name" placeholder="Enter shop name" value="{{ old('shop_name') }}">
                  {!!$errors->first("shop_name", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email<span class="requireRed"> * </span></label>
                  <input class="form-control" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                  {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                </div>

                <div class="form-group">
                  <label>Phone No<span class="requireRed"> * </span></label>
                  <input class="form-control" type="number" name="phone" placeholder="Enter phone no" value="{{ old('phone') }}" min="0">
                  {!!$errors->first("phone", "<span class='text-danger'>:message</span>")!!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Role<span class="requireRed"> * </span></label>
                    <select class="form-control" name="role">
                        <option value=""> Select Role </option>
                        <option value="2" @if(old('role')==2) selected @endif> Restaurant </option>
                        <option value="3" @if(old('role')==3) selected @endif> Retailer </option>
                    </select>
                    {!!$errors->first("role", "<span class='text-danger'>:message</span>")!!}

                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Location<span class="requireRed"> * </span></label>
                    <input class="form-control" type="text" name="location" id="address" placeholder="Enter location" value="{{ old('location') }}">
                    {!!$errors->first("location", "<span class='text-danger'>:message</span>")!!}

                </div>
                <input type="hidden" name="city" id="city" value="{{ old('city') }}">
                <input type="hidden" name="state" id="state" value="{{ old('state') }}">
                <input type="hidden" name="zipcode" id="postal_code" value="{{ old('ziocode') }}">
                <input type="hidden" name="country"  id="country"  value="{{ old('country') }}" >
                <input type="hidden" name="lat"  id="lat" value="{{ old('lat') }}" >
                <input type="hidden" name="lng" id="long" value="{{ old('lng') }}">
                <!-- /.form-group -->
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

@extends('admin.adminlogin.header')
@section('content')
<div class="log-w3">
   <div class="w3layouts-main">
      <figure></figure>
      <h2>Reset Password</h2>
      <form action="{{route('/saveResetPassword')}}" method="post">
          @csrf

          <input type="hidden" name="validate_string" value="{{$validate_string}}">
         <input type="password" class="adminlogin" placeholder="New Password" name="new_password"/>
         <div class="error-message help-inline">
            <?php echo $errors->first('new_password'); ?>
         </div>
         <input type="password" class="adminlogin" placeholder="Confirm Password" name="confirm_password"/>
         <div class="error-message help-inline">
            <?php echo $errors->first('confirm_password'); ?>
         </div>

         <div class="clearfix"></div>
         <input type="submit" value="Submit">
			<a class="btn bg-olive btn-block"  href="{{ url('/admin/login')}}">Cancel</a>

      </form>
   </div>
</div>
@stop
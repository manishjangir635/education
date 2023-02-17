@extends('admin.adminlogin.header')
@section('content')
<div class="log-w3">
   <div class="w3layouts-main">
      <figure></figure>
      <h2>Sign In</h2>
      <form action="{{route('/loginAuth')}}" method="post">
          @csrf
         <input type="email" class="adminlogin" placeholder="E-MAIL" name="email"/>
         <div class="error-message help-inline">
            <?php echo $errors->first('email'); ?>
         </div>
         <input type="password" class="adminlogin" placeholder="PASSWORD" name="password" />
         <div class="error-message help-inline">
            <?php echo $errors->first('password'); ?>
         </div>
         <!-- <span><input type="checkbox" name= "remember_token" @if(isset($_COOKIE['email']))) checked @endif id="remember_token"> Remember Me</span> -->
         <h6>	<a href="{{ url('/admin/fogetPassword')}}">Forgot password?</a></h6>
         <div class="clearfix"></div>
         <input type="submit" value="Sign In" name="login">
      </form>
   </div>
</div>
@stop
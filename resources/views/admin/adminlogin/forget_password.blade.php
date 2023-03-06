@extends('admin.adminlogin.header')
@section('content')
<div class="log-w3">
   <div class="w3layouts-main">
      <figure></figure>
      <h2>Forget Password</h2>
      <form action="{{route('/sendPassword')}}" method="post">
          @csrf
         <input type="email" class="adminlogin" placeholder="E-MAIL" name="email"/>
         <div class="error-message help-inline">
            <?php echo $errors->first('email'); ?>
         </div>

         <div class="clearfix"></div>
         <input type="submit" value="Submit">
			<a class="btn bg-olive btn-block"  href="{{ url('/admin/login')}}">Cancel</a>

      </form>
   </div>
</div>
@stop
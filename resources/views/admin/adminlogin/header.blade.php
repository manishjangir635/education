<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon"  href="fav.ico">

<title><?php echo Config::get("Site.title"); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet"/>
<link rel="stylesheet" href="{{assets('admin/css/toastr.css')}}">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>	
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css"/>
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="{{ asset('js/jquery2.0.3.min.js') }}"></script>
<script src="{{ URL::asset('js/formValidation.js') }}" ></script>
<script src="{{ URL::asset('js/framework/bootstrap.js') }}"></script>

<script src="{{assets('admin/js/jquery.min.js')}}"></script>
<script src="{{assets('admin/js/toastr.min.js')}}"></script>
</head>
	<body class="hold-transition login-page  pace-done">
		@yield('content')
        @if(Session::has('success'))
            <script>
            $(document).ready(function(){
                toastr.success("{{{ Session::get('success') }}}");
            });
            </script>
        @endif

        @if(Session::has('error'))
            <script>
            $(document).ready(function(){
                toastr.error("{{{ Session::get('error') }}}");
            });
            </script>
        @endif
	</body>
</html>
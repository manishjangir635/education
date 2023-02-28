
<script src="{{asset('public/teacher/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('public/teacher/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('public/teacher/js/bvselect.js')}}"></script>
	<script src="{{asset('public/teacher/js/datepicker.js')}}"></script>
	<script src="{{asset('public/teacher/js/ckeditor.js')}}"></script>
	<script src="{{asset('public/teacher/js/sortable.min.js')}}"></script>
	<script src="{{asset('public/teacher/js/custom.js')}}"></script>
	<script src="{{assets('student/js/toastr.min.js')}}"></script>
	
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
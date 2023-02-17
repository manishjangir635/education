<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">POS</a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>



<!-- jQuery -->
<script src="{{assets('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{assets('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{assets('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{assets('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{assets('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{assets('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{assets('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{assets('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{assets('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{assets('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{assets('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{assets('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{assets('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{assets('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{assets('admin/dist/js/pages/dashboard.js')}}"></script>
<script src="{{assets('admin/js/jquery.min.js')}}"></script>
<script src="{{assets('admin/js/toastr.min.js')}}"></script>
<script src="{{assets('admin/js/bootbox.js')}}"></script>
<script src="{{assets('admin/ckeditor/ckeditor.js')}}"></script>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcPWHyC2mJjFtCKGRgQHyYO310KRH25tw&callback=addvenueaddress&libraries=places&v=weekly&language=en"
async
></script>
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

<script>
	
	var body = CKEDITOR.replace('body', {extraAllowedContent: 'div',height: 300});
		
	$('body').on('change','.select_action',function(){
		var value = $(this).val();
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
		$.ajax({
			url: "{{route('/getConstant')}}",
			type: "POST",
			data: { value: value},
			success: function(r){		
				// console.log(r);
				$('.constant').html(r);
			}
		});
	})


	function InsertHtml(){
		var strUser = $('.constant').find(":selected").val();
		// alert(strUser);
		if(strUser != ''){
			var newStr = '{'+strUser+'}';
			var oEditor = CKEDITOR.instances["body"] ;
			oEditor.insertHtml(newStr) ;	
		}
	
    }

	$('body').on('click', '.delete_any_item', function(e){ 
		url = $(this).attr('href');
		bootbox.confirm("Are you sure want to delete this ?",
		function(result){
			if(result){
				window.location.replace(url);
			}
		});
		e.preventDefault();
	});

	function extractFromAdress(components, type) {
		for (var i = 0; i < components.length; i++)
		for (var j = 0; j < components[i].types.length; j++)
		if (components[i].types[j] == type) return components[i].long_name;
		return "";
	}
	var IsplaceChange = false;
	function addvenueaddress() {
		var input = document.getElementById('address');
		var autocomplete = new google.maps.places.Autocomplete(input);
 
		autocomplete.addListener('place_changed', function() {
		var place = autocomplete.getPlace();
		console.log(place.geometry);
		if (!place.geometry) {
			$("#errProfileLocation").html("Please select valid address from list.").show();
			$("#firstStep").addClass('com-disabled');
			$("#firstStep").attr('disabled', true);
		}
		IsplaceChange = true;
		var userlat = place.geometry['location'].lat();
		var userlng = place.geometry['location'].lng();
 
		var postCode = extractFromAdress(place.address_components, "postal_code");
		var street = extractFromAdress(place.address_components, "route");
		var town = extractFromAdress(place.address_components, "locality");
		var country = extractFromAdress(place.address_components, "country");
		var state = extractFromAdress(place.address_components, "administrative_area_level_1");
 
		console.log(postCode);
		
		$('#lat').val(userlat);
		$('#long').val(userlng);
		
		$('#city').val(town);
		$('#state').val(state);
		$('#country').val(country);
		$('#postal_code').val(postCode);
		
		});
	}
</script>
</body>
</html>

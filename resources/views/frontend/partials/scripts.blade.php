{{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<!-- Latest jQuery -->
<script src={{asset("assets/js/jquery-1.12.4.min.js")}}></script>
<!-- popper min js -->
<script src={{asset("assets/js/popper.min.js")}}></script>

<!-- owl-carousel min js  -->
<script src={{asset("assets/owlcarousel/js/owl.carousel.min.js")}}></script>
<!-- magnific-popup min js  -->
<script src={{asset("assets/js/magnific-popup.min.js")}}></script>
<!-- waypoints min js  -->
<script src={{asset("assets/js/waypoints.min.js")}}></script>
<!-- parallax js  -->
<script src={{asset("assets/js/parallax.js")}}></script>
<!-- countdown js  -->
<script src={{asset("assets/js/jquery.countdown.min.js")}}></script>
<!-- imagesloaded js -->
<script src={{asset("assets/js/imagesloaded.pkgd.min.js")}}></script>
<!-- isotope min js -->
<script src={{asset("assets/js/isotope.min.js")}}></script>
<!-- jquery.dd.min js -->
<script src={{asset("assets/js/jquery.dd.min.js")}}></script>
<!-- slick js -->
<script src={{asset("assets/js/slick.min.js")}}></script>
<!-- elevatezoom js -->
<script src={{asset("assets/js/jquery.elevatezoom.js")}}></script>
<!-- Latest compiled and minified Bootstrap -->
<script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
<!-- scripts js -->
<script src={{asset("assets/js/scripts.js")}}></script>


{{-- <script>
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

	function addToCart(product_id){
		var url = "{{ url('/') }}";
		$.post( url+"/api/carts/store",
			{
				product_id: product_id
			})
		  .done(function( data ) {
		  	data = JSON.parse(data);
		    if(data.status == 'success'){
		    	// toast
		    	alertify.set('notifier','position', 'top-center');
				alertify.success('Item added to cart successfully !! Total Items: '+data.totalItems+ '<br />To checkout <a href="{{ route('carts') }}">go to checkout page</a>');

		    	$("#totalItems").html(data.totalItems);
		    }
		  });
	}
</script> --}}

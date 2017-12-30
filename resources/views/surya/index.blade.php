@extends('surya.master')
@section('content')
<section id="home">
	<div class="overlay">
		<div class="container mt-4">
			<div class="row mb-3">
				<div class="col-4">
					<img src="{{ asset('images/surya/logo.jpg') }}" alt="surya-kusuma-logo" class="img-thumbnail">
				</div>
				<div class="col d-none d-sm-block">
					<div class="header-contact-wrapper">
						<div class="header-contact-wrapper-item">
							<i class="fa fa-phone fa-3x text-warning" aria-hidden="true"></i>
						</div>
						<div class="header-contact-wrapper-item text-light">
							<span class="text-light">
								CALL US <br> 021-78987456543
							</span>
						</div>
						<div class="header-contact-wrapper-item">
							<i class="fa fa-envelope fa-3x text-warning" aria-hidden="true"></i>
						</div>
						<div class="header-contact-wrapper-item text-light">
							<span class="text-light">
								EMAIL <br> blabla@yahoo.com
							</span>
						</div>
					</div>
				</div>
			</div>
			@include('surya.navbar')
		</div>
	</div>
</section>
<section id="services">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</section>
@stop
@section('scripts')
{{-- <script>
	// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");
var container = document.getElementsByClassName('container');
// Get the offset position of the navbar
var sticky = navbar.offsetTop;
console.log(container[0].offsetWidth);
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    navbar.style.width = container[0].offsetWidth + "px";
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> --}}
@stop
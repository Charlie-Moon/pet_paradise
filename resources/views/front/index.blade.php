@extends('layouts.home')

@section('page-title', __('Pet Paradise'))

@section('content')

<!-- Navbar --->
@include('front.partials.navbar')

<!-- Slider -->
@include('front.partials.slide')

<!--- Services --->
<section class="services bg-light">

	<div class="container">
		<div class="row">

			@include('front.partials.services')

		</div>
	</div>

</section>

<!--- Products --->
<section class="products">

	<div class="container">
		<div class="row">

			{{-- @include('partials.products') --}}

		</div>
	</div>

</section>

<footer class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				{{-- <img src="" alt=""> --}}
				<i class="fab fa-accusoft"></i>
				<h3 class="mt-3">Welcome to Pet Paradise</h3>
			</div>
		</div>
	</div>
</footer>
@endsection
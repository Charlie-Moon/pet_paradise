@extends('layouts.home')

@section('page-title', __('Pet Paradise'))

@section('content')

<!-- Navbar --->
@include('front.partials.navbar')

<div class="py-4"></div>
<!--- Services --->
<section class="services bg-light">

	<div class="container">
		<div class="row">

			<div class="col-12">

				<h3 class="title">
					Our Services
				</h3>

			</div>

		</div>

		<div class="row row-cols-1 row-cols-md-4">

			    @include('front.partials.service')


		</div>

	</div>

</section>


<footer class="bg-white py-4">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				{{-- <img src="" alt=""> --}}
				<i class="fab fa-accusoft"></i>
				<h3 class="mt-3">Welcome to Pet Paradise</h3>
				&copy; copyright 2022
			</div>
		</div>
	</div>
</footer>
@endsection

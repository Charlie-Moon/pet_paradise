@extends('layouts.home')

@section('page-title', __('Pet Paradise'))

@section('content')

<!-- Slider -->
@include('front.partials.slide')
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

<!--- Products --->
<section class="products">

	<div class="container">
		<div class="row">

			<div class="col-12">

				<h3 class="title">
					Our Products
				</h3>

			</div>

		</div>

		<div class="row row-cols-1 row-cols-md-4">

			@include('front.partials.product')

		</div>

	</div>

</section>

@endsection

@section('scripts')

@endsection

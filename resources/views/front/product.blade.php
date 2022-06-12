@extends('layouts.home')

@section('page-title', __('Pet Paradise'))

@section('content')

<div class="py-4"></div>
<!--- Services --->

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

		<div class="row">
			{{ $product->links() }}
		</div>
	</div>
</section>
@endsection

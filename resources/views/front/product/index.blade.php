@extends('layouts.home')

@section('page-title', __('Pet Paradise - Products'))

@section('content')
	<div class="container">

		@include('front.partials.product')
		
		<div class="col-12">

			{{ $product->links() }}

		</div>
	</div>
@endsection
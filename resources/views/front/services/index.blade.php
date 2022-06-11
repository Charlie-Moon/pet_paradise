@extends('layouts.home')

@section('page-title', __('Pet Paradise - Services'))

@section('content')
	<div class="container">

		@include('front.partials.service')
		
		<div class="col-12">

			{{ $service->links() }}

		</div>

	</div>
@endsection
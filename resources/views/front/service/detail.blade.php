@extends('layouts.home')

@section('page-title', __('Pet Paradise - {{ $service->serviceTitle }}'))

@section('content')
	<div class="page-detail container">

		<h4 class="mb-3 display-4 text-center">{{ $service->serviceTitle }}</h4>

		{!! $service->serviceBody !!}
		
	</div>
@endsection
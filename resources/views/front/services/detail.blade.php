@extends('layouts.home')

@section('page-title', __('Pet Paradise - {{ $service->serviceTitle }}'))

@section('content')
	<div class="container">

		{!! $service->serviceBody !!}
		
	</div>
@endsection
@extends('layouts.home')

@section('page-title', __('Pet Paradise - {{ $product->serviceTitle }}'))

@section('content')
	<div class="container">

		{!! $product->serviceBody !!}
		
	</div>
@endsection
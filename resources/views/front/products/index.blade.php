@extends('layouts.home')

@section('page-title', __('Pet Paradise - Products'))

@section('content')
	<div class="container">

		@include('front.partials.product')
		
	</div>
@endsection
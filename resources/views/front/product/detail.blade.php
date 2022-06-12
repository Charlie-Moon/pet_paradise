@extends('layouts.home')

@section('page-title', $product->serviceTitle)

@section('content')
	<div class="container">

		{!! $product->serviceBody !!}
		
	</div>
@endsection
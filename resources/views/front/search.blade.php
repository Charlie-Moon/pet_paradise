@extends('layouts.home')

@section('content')

<section class="search_page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="mb-4">Search Results:</h3>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-4 g-4">

				@foreach ($service as $index => $item)
					<div class="col">
						<div class="card mb-0">
							<a href="/services/{{ $item->id }}" class="ratio ratio-16x9">
								<img src="{{ url('/').'/public/Image/'.$item->serviceImage }}" class="card-img-top" alt="...">
							</a>
							<div class="card-body">
								<h5 class="card-title">
								<a href="/services/{{ $item->id }}" class="text-decoration-none">	{{ $item->serviceTitle }}</a>
								</h5>
								<p class="card-text">
									{{ $item->serviceExcerpt }}
								</p>
							</div>
						</div>
					</div>
				@endforeach
				
				@foreach ($product as $index => $item)
					<div class="col">
						<div class="card mb-0">
							<a href="/services/{{ $item->id }}" class="ratio ratio-16x9">
								<img src="{{ url('/').'/public/Image/'.$item->serviceImage }}" class="card-img-top" alt="...">
							</a>
							<div class="card-body">
								<h5 class="card-title">
								<a href="/services/{{ $item->id }}" class="text-decoration-none">	{{ $item->serviceTitle }}</a>
								</h5>
								<p class="card-text">
									{{ $item->serviceExcerpt }}
								</p>
							</div>
						</div>
					</div>
				@endforeach
		
		</div>
	</div>
</section>
		
@endsection
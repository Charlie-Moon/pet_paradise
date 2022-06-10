@foreach ($service as $item)

		<div class="col">
			<div class="card">
				<img class="card-img" src="{{ url('/').'/public/Image/'.$item->serviceImage }}" alt="{{ $item->serviceTitle }}">
				<div class="card-img-overlay">
					<h5 class="card-title">{{ $item->serviceTitle }}</h5>
					<p class="card-text line-clamp-3">{{ $item->serviceExcerpt }}</p>
				</div>
			</div>
		</div>

@endforeach
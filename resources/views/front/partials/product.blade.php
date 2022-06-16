@foreach ($product as $item)
		<div class="col">
			<a href="/products/{{ $item->id }}" class="card">
				<div class="ratio ratio-16x9">
					<img class="card-img" src="{{ url('/').'/public/Image/'.$item->serviceImage }}" alt="{{ $item->serviceTitle }}">
				</div>
				<div class="card-img-overlay">
					<h5 class="card-title">{{ $item->serviceTitle }}</h5>
					<p class="card-text line-clamp-3">{{ $item->serviceExcerpt }}</p>
				</div>
			</a>
		</div>
@endforeach
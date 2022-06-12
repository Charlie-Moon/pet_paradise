<section class="slider d-none d-md-block">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
        {{-- @foreach($slide as $item)
					<li class="{{ $loop->iteration ==1 ? 'active' : '' }}" data-target="#my-carousel" data-slide-to="{{ $loop->iteration }}" aria-current="location"></li>
        @endforeach --}}

				@foreach($slide as $index => $item)

				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index ===0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index }}"></button>

				@endforeach

		</ol>
		<div class="carousel-inner">

				@foreach($slide as $item)
						<div class="carousel-item {{ $loop->iteration ==1 ? 'active' : ' ' }}">
								<div class="ratio ratio-21x9">
										<img src="{{ url('/').'/public/Image/'.$item->serviceImage }}" alt="">
								</div>
								<div class="carousel-caption d-none d-md-block">
										<h5>{{ $item->serviceTitle }}</h5>
										<p>{{ $item->serviceExcerpt }}</p>
								</div>
						</div>
				@endforeach

		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>

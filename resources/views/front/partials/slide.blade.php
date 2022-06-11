<section class="slider d-none d-md-block">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
        @foreach($slide as $item)
					<li class="{{ $loop->iteration ==1 ? 'active' : '' }}" data-target="#my-carousel" data-slide-to="{{ $loop->iteration }}" aria-current="location"></li>
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
		<a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev" role="button">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next" role="button">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

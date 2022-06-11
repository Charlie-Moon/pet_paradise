<section class="slider d-none d-md-block">
	<div id="my-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
            @foreach($slide as $item)
			<li class="{{ $loop->iteration ==1 ? 'active' : '' }}" data-target="#my-carousel-{{ $loop->iteration }}" data-slide-to="{{ $loop->iteration }}" aria-current="location"></li>
            @endforeach

		</ol>
		<div class="carousel-inner">
            @foreach($slide as $item)
			    <div class="carousel-item {{ $loop->iteration ==1 ? 'active' : '' }}">
				<div class="ratio ratio-21x9">
					<img src="{{ url('/').'/public/Image/'.$item->serviceImage }}" alt="">
				</div>
				<div class="carousel-caption d-none d-md-block">
					<h5>Title</h5>
					<p>Text</p>
				</div>
			</div>
            @endforeach

		</div>
		<a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

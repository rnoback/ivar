<a class="card {{$cardTypeClass}}" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
	<div class="card__image" style="background-image: url( <?php the_post_thumbnail_url('featured-medium') ?>)"></div>
	<div class="card__content-type">
		@if ($cardType == "photo" )
		<i class="fas fa-camera fa-lg icon icon-photo"></i>
	@elseif ($cardType == "video" )
		<i class="fas fa-video fa-lg icon icon-video"></i>
		@endif
	</div>

	<div class="card__content">
		<h4 class="card__content__title">@php  the_title() @endphp</h4>
		@php the_excerpt() @endphp

		<i class="far fa-arrow-alt-circle-right fa-lg icon icon-arrow-right"></i>
	</div>
</a>

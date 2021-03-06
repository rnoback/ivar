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
		<h5 class="card__content__title">@php  the_title() @endphp </h5>
		<p class="list-group-item-text"><?php echo get_the_excerpt() ?></p>
		<i class="far fa-arrow-alt-circle-right fa-lg icon icon-arrow-right"></i>
	</div>
</a>

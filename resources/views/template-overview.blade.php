{{--
  Template Name: Overview Template
--}}

@extends('layouts.app')

@section('content')

<div class="row">
<!--Child Page Thumbnails Start-->
<?php
$subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'meta_key' => '_thumbnail_id' ));

if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post();
?>
	<div class="col-12 col-sm-6 col-md-4">
	<?php
	if ( has_post_thumbnail( $_post->ID ) ) {
	?>
	    <a class="card" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
			<h1><?php the_title() ?></h1>
			<?php echo get_the_post_thumbnail( $_post->ID, 'bones-thumb-450' ); ?>
		</a>;
	<?php
	}
	?>
	</div>
	<?php
	endwhile; endif; wp_reset_postdata();
	?>
	<!--Child Page Thumbnails End-->
</div>

<ul>
	@wpquery( array( 'post_type' => 'post' ) )
	        <li><a href="{{ the_permalink() }}">{{ the_title() }}</a></li>
	@wpempty
	        <li>{{ __( 'Sorry, no posts matched your criteria.' ) }}</li>
	@wpend
</ul>

<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
<div class="col-12 col-md-8">.col-12 .col-md-8</div>
<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
<div class="col-6 col-md-4">.col-6 .col-md-4</div>
<div class="col-6 col-md-4">.col-6 .col-md-4</div>
<div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
<div class="col-6">.col-6</div>
<div class="col-6">.col-6</div>
</div>
@endsection

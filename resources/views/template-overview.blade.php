{{--
  Template Name: Overview Template
--}}

@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-12 col-lg-10">
	@include('partials.page-header', [
		'layoutClass' => 'page-header',
		'headerClass' => 'page-title'
	]);
	<?php
	wp_reset_postdata();
	?>
	@include('partials.content-page')
	</div>
</div>
<div class="row">

<!--Child Page Thumbnails Start-->
<?php
$subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'meta_key' => '_thumbnail_id' ));

if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post();
?>
	<div class="col-12 col-md-6 col-lg-4 card-container ">
	<?php
	if ( has_post_thumbnail( $_post->ID ) ) {
	?>

	@include('partials.card', ['cardType'=>'photo', 'cardTypeClass' => 'card--type-a'])	

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

@endsection

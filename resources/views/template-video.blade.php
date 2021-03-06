{{--
  Template Name: Video Template
--}}

@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12 col-md-10">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

	<?php the_field('video-link'); ?>
  @endwhile
		</div>
	</div>
@endsection

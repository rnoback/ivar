{{--
  Template Name: Video Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphpd
    @include('partials.page-header')
    @include('partials.content-page')

	<?php the_field('video-link'); ?>


  @endwhile
@endsection

{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

<i class="fab fa-facebook"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-linkedin"></i>
<i class="far fa-envelope"></i>

  @endwhile
@endsection

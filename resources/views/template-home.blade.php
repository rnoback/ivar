{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
	<div class="page-mega-header">
		<div class="row">
			<div class="col-11 col-sm-10 col-md-8">
    		@include('partials.page-header', [
				'layoutClass' => 'page-header--homepage',
				'headerClass' => 'homepage'
			])
			@include('partials.content-page')
			@include('partials.social-media')
			</div>
		</div>
	</div>




  @endwhile


@endsection

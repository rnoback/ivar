@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12 col-md-10">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
		</div>
	</div>
@endsection

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
	<div class="bg-image"></div>
    <div class="wrap container" role="document">
      <div class="content">
		  <!-- Facebook icon -->
	<i class="fab fa-facebook"></i>
	<!-- Twitter icon -->
	<i class="fab fa-twitter"></i>
	<i class="fas fa-arrow-alt-circle-right"></i>
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>

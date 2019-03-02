<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
	<?php
		$image = get_field('background_image');
		if( !empty($image) ): ?>
		<div class="bg-image" style="background-image: url(<?php echo $image; ?>);"></div>
		<?php endif; ?>

    <div class="wrap container" role="document">
      <div class="content">
        <main class="main section-vr-t">
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

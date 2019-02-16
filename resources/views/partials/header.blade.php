<header class="banner js-banner" data-enhancer="Navigation">
		<div class="container">

		    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
		    <nav class="nav-primary">
		      @if (has_nav_menu('primary_navigation'))
		        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
		      @endif
		  	</nav>

			<div class="hamburger-outer js-hamburger-toggle">
				<div class="hamburger-inner js-hamburger-inner"></div>
			</div>
		</div>
</header>

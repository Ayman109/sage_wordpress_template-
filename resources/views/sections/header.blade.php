<header class="banner">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
    <a class="brand" href="{{ home_url('/') }}">
      @if(get_theme_mod('site_logo'))
        <img src="{{ get_theme_mod('site_logo') }}" alt="{{ get_theme_mod('site_name') }}" class="max-h-12">
      @else
        <span class="text-xl font-bold">{{ get_bloginfo('name') }}</span>
      @endif
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary px-8" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-4', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>

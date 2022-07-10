<header id="header" class="banner">
  <a class="brand text-5xl text-yellow-400" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>

<div class="single-item">
  <img class="w-full h-screen object-cover object-center" src="@asset('4aeac0541d1fe801bcfb4de749b328b6.jpeg')">
  <img class="w-full h-screen object-cover object-center" src="@asset('0603642a20bbe3cb3fb583cdb758a453.jpeg')">
</div>

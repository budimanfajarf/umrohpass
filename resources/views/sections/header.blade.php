<header id="header"
  class="banner header sticky top-0 w-full bg-white z-50 transition-all duration-300 shadow-sm drop-shadow-sm">
  <div class="container flex flex-wrap justify-between items-center h-20 md:h-[110px]">
    <a class="font-bold text-2xl md:text-4xl" href="{{ home_url('/') }}">
      @if ($logo)
        <img src="{{ $logo['url'] }}" alt="Logo Umrohpass" class="h-[45px] md:h-[65px]">
      @else
        <span>{!! $siteName !!}</span>
      @endif
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary nav-primary--desktop hidden lg:block"
        aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav',
            'echo' => false,
        ]) !!}
      </nav>
    @endif

    <button
      class="js-mobile-menu-trigger flex items-center lg:hidden px-3 py-2 rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M3 18H21V16H3V18ZM3 13H21V11H3V13ZM3 6V8H21V6H3Z" fill="black" />
      </svg>
    </button>
  </div>
</header>


{{-- Mobile Menu --}}
@if (has_nav_menu('primary_navigation'))
  <div id="mobile-menu" class="hidden fixed top-0 z-10 pt-20 md:pt-[110px] bg-white w-full shadow-sm drop-shadow-sm">
    <nav class="nav-primary nav-primary--mobile container"
      aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'primary-navigation',
          'echo' => false,
      ]) !!}
    </nav>
  </div>
@endif

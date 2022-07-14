<header id="header" class="banner container mx-auto px-6 py-2 flex justify-between items-center h-24">
  <a class="font-bold text-2xl lg:text-4xl" href="{{ home_url('/') }}">
    @if ($logo)
      <img
        src="{{ $logo['url'] }}"
        alt="Logo Umrohpass"
        class=" h-[45px] lg:h-[65px]"
      >
    @else
      <span>{!! $siteName !!}</span>
    @endif
  </a>

  <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg>
      </button>
  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav
      class="hidden lg:block nav-primary nav-primary--desktop"
      aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
    >
      {!!
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav',
          'echo' => false
        ])
      !!}
    </nav>
  @endif
</header>

{{-- <div class="single-item">
  <img class="w-full h-screen object-cover object-center" src="@asset('4aeac0541d1fe801bcfb4de749b328b6.jpeg')">
  <img class="w-full h-screen object-cover object-center" src="@asset('0603642a20bbe3cb3fb583cdb758a453.jpeg')">
</div> --}}

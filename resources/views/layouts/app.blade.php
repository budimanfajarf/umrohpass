<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<main id="main" class="main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('sections.footer')

{{-- <img class="w-full h-full hidden md:block" src="@asset('desktop.png')">
<img class="w-full h-full md:hidden" src="@asset('mobile.png')"> --}}
{{-- <div class="selected-choice selected-choice--hotel">
  <h5>Hotel</h5>
  <div>
    <img src="/wp-content/themes/umrohpass/public/hilton-madinah.png" alt="Hilton Madinah">
    <span>Hilton Madinah</span>
  </div>
</div> --}}

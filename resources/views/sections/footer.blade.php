<footer class="content-info footer bg-brandblue text-sm md:text-lg lg:text-base xl:text-lg text-justify pt-5 pb-9 md:pt-7 md:pb-14">
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}

  <div class="container space-y-8 md:space-y-12 lg:space-y-0 lg:flex lg:space-x-20 xl:space-x-24">
    <div class="lg:max-w-[300px] xl:max-w-[420px] 2xl:max-w-[485px]">
      <a class="inline-block font-bold text-2xl md:text-4xl mb-3 md:mb-3.5" href="{{ home_url('/') }}">
        @if ($logo_alt)
          <img
            src="{{ $logo_alt['url'] }}"
            alt="Logo Alt Umrohpass"
            class="h-[45px] md:h-20"
          >
        @else
          <span>{!! $siteName !!}</span>
        @endif
      </a>

      @if ($about)
        <p class="text-xsp md:text-base">
          {!! $about !!}
        </p>
      @endif
    </div>

    @if (has_nav_menu('footer_navigation'))
      <div class="lg:pt-8">
        <h5 class="font-semibold mb-3 md:mb-4 lg:mb-10">
          {!! wp_get_nav_menu_name('footer_navigation') !!}
        </h5>
        <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!!
            wp_nav_menu([
              'theme_location' => 'footer_navigation',
              'menu_class' => 'footer-navigation',
              'echo' => false
            ])
          !!}
        </nav>
      </div>
    @endif

    <div id="contact" class="lg:max-w-[320px] lg:pt-8">
      @if ($contact_us)
        @if ($contact_us['title'])
          <h5 class="font-semibold mb-3 md:mb-4 lg:mb-10">
            {!! $contact_us['title'] !!}
          </h5>
        @endif

        @if ($contact_us['description'])
          <p class="mb-5 md:mb-8">
            {!! $contact_us['description'] !!}
          </p>
        @endif

        <div class="flex items-center space-x-4 lg:block lg:space-x-0 lg:space-y-5">
          @if ($whatsapp)
            <a
              href="{!! $whatsapp['number'] ? "https://wa.me/{$whatsapp['number']}" : 'javascript:void(0)' !!}"
              target="{{ $whatsapp['number'] ? '_blank' : '' }}"
              rel="noopener noreferrer"
              class="button button--whatsapp space-x-2 lg:w-full"
            >
              <svg class="w-[18px] h-[18px] md:h-[24px] md:w-[24px] transition-all" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.0498 4.91006C18.133 3.98399 17.041 3.24973 15.8374 2.75011C14.6339 2.25049 13.3429 1.99552 12.0398 2.00006C6.5798 2.00006 2.1298 6.45006 2.1298 11.9101C2.1298 13.6601 2.5898 15.3601 3.4498 16.8601L2.0498 22.0001L7.2998 20.6201C8.7498 21.4101 10.3798 21.8301 12.0398 21.8301C17.4998 21.8301 21.9498 17.3801 21.9498 11.9201C21.9498 9.27006 20.9198 6.78006 19.0498 4.91006ZM12.0398 20.1501C10.5598 20.1501 9.1098 19.7501 7.8398 19.0001L7.5398 18.8201L4.4198 19.6401L5.2498 16.6001L5.0498 16.2901C4.22755 14.977 3.79094 13.4593 3.7898 11.9101C3.7898 7.37006 7.4898 3.67006 12.0298 3.67006C14.2298 3.67006 16.2998 4.53006 17.8498 6.09006C18.6173 6.85402 19.2255 7.76272 19.6392 8.76348C20.0529 9.76425 20.2638 10.8372 20.2598 11.9201C20.2798 16.4601 16.5798 20.1501 12.0398 20.1501ZM16.5598 13.9901C16.3098 13.8701 15.0898 13.2701 14.8698 13.1801C14.6398 13.1001 14.4798 13.0601 14.3098 13.3001C14.1398 13.5501 13.6698 14.1101 13.5298 14.2701C13.3898 14.4401 13.2398 14.4601 12.9898 14.3301C12.7398 14.2101 11.9398 13.9401 10.9998 13.1001C10.2598 12.4401 9.7698 11.6301 9.6198 11.3801C9.4798 11.1301 9.5998 11.0001 9.7298 10.8701C9.8398 10.7601 9.9798 10.5801 10.0998 10.4401C10.2198 10.3001 10.2698 10.1901 10.3498 10.0301C10.4298 9.86006 10.3898 9.72006 10.3298 9.60006C10.2698 9.48006 9.7698 8.26006 9.5698 7.76006C9.3698 7.28006 9.1598 7.34006 9.0098 7.33006H8.5298C8.3598 7.33006 8.0998 7.39006 7.8698 7.64006C7.6498 7.89006 7.0098 8.49006 7.0098 9.71006C7.0098 10.9301 7.89981 12.1101 8.0198 12.2701C8.1398 12.4401 9.7698 14.9401 12.2498 16.0101C12.8398 16.2701 13.2998 16.4201 13.6598 16.5301C14.2498 16.7201 14.7898 16.6901 15.2198 16.6301C15.6998 16.5601 16.6898 16.0301 16.8898 15.4501C17.0998 14.8701 17.0998 14.3801 17.0298 14.2701C16.9598 14.1601 16.8098 14.1101 16.5598 13.9901Z" fill="#FAFAFA"/>
              </svg>

              @if ($whatsapp['label'])
                <span>
                  {!! $whatsapp['label'] !!}
                </span>
              @endif
            </a>
          @endif

          @if ($social_media_links)
            <div class="flex items-center space-x-4 lg:justify-between">
              @foreach ($social_media_links as $link)
                <a
                  href="{{ $link['url'] }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="social-media-link"
                >
                  @if ($link['icon_svg'])
                    {!! $link['icon_svg'] !!}
                  @elseif ($link['icon'])
                    <img src="{{ $link['icon']['url'] }}" alt="{{ $link['name'] }}">
                  @else
                    @php($icon_url = "https://ui-avatars.com/api/?name= " . $link['name'] . "&color=16215B&background=fff&bold=true&length=1&font-size=0.6")
                    <img src="{{ $icon_url }}" alt="{{ $link['name'] }}" class="rounded-ten">
                  @endif

                  <span class="sr-only">{{ $link['name'] }}</span>
                </a>
              @endforeach
            </div>
          @endif
        </div>
      @endif
    </div>
  </div>
</footer>

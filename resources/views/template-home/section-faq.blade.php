@if ($faq_section)
  <section id="faq" class="py-8 md:py-12 pb-16 md:pb-24 container">
    @if ($faq_section['title'])
      <x-heading-section :title="$faq_section['title']" />
    @endif

    @if ($faq_section['items'])
      <div class="flex flex-col space-y-3 md:space-y-[34px]">
        @foreach ($faq_section['items'] as $item)
          @if ($item['title'])
            <div class="px-5 md:px-14 border border-brandgray border-opacity-40 rounded-ten">
              <button class="js-accordion-trigger accordion-trigger py-8 font-bold space-x-5 flex items-center justify-between w-full">
                <span>{!! $item['title'] !!}</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10H7Z" fill="black"/>
                </svg>
              </button>

              <div class="hidden prose max-w-none py-1 md:pb-10">
                {!! $item['description'] !!}
              </div>
            </div>
          @endif
        @endforeach
      </div>
    @endif
  </section>
@endif

@if ($package_section)
  <section id="package" class="py-8 md:py-12 container">
    @if ($package_section['title'])
      <x-heading-section :title="$package_section['title']" />
    @endif

    @if ($package_section['items'])
      <div class="grid grid-cols-2 gap-6 md:gap-10">
        @foreach ($package_section['items'] as $item)
          <div class="col-span-2 lg:col-span-1 rounded-ten overflow-hidden flex flex-col">
            <div class="w-full relative bg-gray-300">
              @if ($item['gallery_images'])
                <div class="js-package-slider package-slider">
                  @foreach ($item['gallery_images'] as $image)
                    <img class="h-[315px] object-cover object-center" src="{{ $image['url'] }}"
                      alt="{{ $image['alt'] ?: $image['title'] }}">
                  @endforeach
                </div>
              @endif

              <div class="absolute bottom-0 left-0 text-white py-9 px-5 md:p-10">
                <h3 class="text-lg md:text-2xl mb-2 md:mb-1">
                  {!! $item['label'] !!}
                </h3>
                <h2 class="font-bold text-xlp md:text-3xlp">
                  {!! $item['name'] !!}
                </h2>
              </div>
            </div>

            <div
              class="border border-t-0 border-brandgray border-opacity-40 rounded-b-[10px] pt-8 pb-9 px-5 md:p-9 h-full">
              @if ($item['plane'])
                <div class="text-sm md:text-lg mb-8">
                  @if ($item['plane']['label'])
                    <h4 class="mb-3.5 md:mb-2.5 font-bold">
                      {!! $item['plane']['label'] !!}
                    </h4>
                  @endif

                  @if ($item['plane']['items'])
                    <div
                      class="grid grid-cols-2 gap-2.5 sm:gap-5 md:gap-[60px] lg:gap-6 xl:gap-[60px] text-xsp md:text-lg lg:text-sm xl:text-lg">
                      @foreach ($item['plane']['items'] as $plane)
                        <div class="flex items-center space-x-2 md:space-x-3">
                          @if ($plane['image'])
                            @php($image_url = wp_get_attachment_image_url($plane['image']))
                            <img src="{{ $image_url }}" alt="{{ $plane['name'] }}"
                              class="max-h-5 max-w-[40px] md:max-h-12 md:max-w-[65px] object-contain object-center">
                          @endif
                          <span>{!! $plane['name'] !!}</span>
                        </div>
                      @endforeach
                    </div>
                  @endif
                </div>
              @endif

              @if ($item['hotel'])
                <div class="text-sm md:text-lg mb-8">
                  @if ($item['hotel']['label'])
                    <h4 class="mb-3.5 md:mb-2.5 font-bold">
                      {!! $item['hotel']['label'] !!}
                    </h4>
                  @endif

                  @if ($item['hotel']['items'])
                    <div
                      class="grid grid-cols-2 gap-2.5 sm:gap-5 md:gap-[60px] lg:gap-6 xl:gap-[60px] text-xsp md:text-lg lg:text-sm xl:text-lg">
                      @foreach ($item['hotel']['items'] as $hotel)
                        <div class="flex items-center space-x-2 md:space-x-3">
                          @if ($hotel['image'])
                            @php($image_url = wp_get_attachment_image_url($hotel['image']))
                            <img src="{{ $image_url }}" alt="{{ $hotel['name'] }}"
                              class="max-h-5 max-w-[40px] md:max-h-12 md:max-w-[65px] object-contain object-center">
                          @endif
                          <span>{!! $hotel['name'] !!}</span>
                        </div>
                      @endforeach
                    </div>
                  @endif
                </div>
              @endif

              @if ($item['accommodation'])
                <div class="text-sm md:text-lg mb-8">
                  @if ($item['accommodation']['label'])
                    <h4 class="mb-3.5 md:mb-2.5 font-bold">
                      {!! $item['accommodation']['label'] !!}
                    </h4>
                  @endif

                  @if ($item['accommodation']['text'])
                    <div class="prose-sm max-w-none">
                      {!! $item['accommodation']['text'] !!}
                    </div>
                  @endif
                </div>
              @endif

              @if ($item['link'])
                <div class="text-center relative mt-10">
                  <a href="{{ $item['link']['url'] }}" target="{{ $item['link']['target'] }}" class="button mx-auto">
                    {!! $item['link']['title'] !!}
                  </a>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </section>
@endif

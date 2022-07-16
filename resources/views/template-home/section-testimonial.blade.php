@if ($testimonial_section)
  @php($background_image_url = $testimonial_section['background_image']['url'] ?? $placeholder_image_url )

  <section
    id="testimonial"
    style="background-image: url('{{ $background_image_url }}')"
    class="pt-14 pb-28 md:py-20 lg:pb-[60px] bg-cover bg-center relative"
  >
    <div class="absolute inset-0 w-full h-full bg-[#EEF1F4] opacity-50"></div>

    <div class="relative container flex flex-col space-y-10 lg:flex-row lg:items-center lg:space-x-10 2xl:space-x-28 lg:justify-between">
      @if ($testimonial_section['title'])
        <h3 class="text-brandblack text-2xl leading-normal md:text-3xlp lg:text-2xl 2xl:text-3xlp font-bold mb-8 2xl:max-w-[400px]">
          {{ $testimonial_section['title'] }}
        </h3>
      @endif

      @if ($testimonial_section['items'])
        <div class="js-testimonial-slider -mx-2.5 lg:max-w-[60%] xl:max-w-[70%] 2xl:max-w-[735px]">
          @foreach($testimonial_section['items'] as $item)
            @if ($item && $item['name'] && $item['testimony'])
              <div class="px-2.5 w-full">
                <div class="w-full p-3 pt-7 pb-5 md:p-6 md:pb-7 bg-white rounded-ten max-w-[180px] md:max-w-[235px] mx-auto h-[230px] md:h-[300px]">
                  @php($photo_url = $item['photo']['url'] ?? "https://ui-avatars.com/api/?name={$item['name']}&background=C8A251&color=fff" )

                  <img
                    class="mb-3 md:mb-8 w-[70px] md:w-[85px] h-[70px] md:h-[85px] rounded-full mx-auto"
                    src="{{ $photo_url }}"
                    alt="{{ $item['name'] }}"
                  >

                  @if ($item['testimony'])
                    <h4 class="text-sm md:text-md lg:text-lg mb-6 md:mb-8">
                      {!! $item['testimony'] !!}
                    </h4>
                  @endif

                  @if ($item['name'])
                    <h5 class="font-semibold text-sm">
                      {!! $item['name'] !!}
                    </h5>
                  @endif

                  @if ($item['job'])
                    <h6 class="text-xs italic">
                      {!! $item['job'] !!}
                    </h6>
                  @endif
                </div>
              </div>
            @endif
          @endforeach
        </div>
      @endif
    </div>

    @if ($testimonial_section['link'])
      <div class="text-center relative mt-6 md:mt-[60px]">
        <a href="{{ $testimonial_section['link']['url'] }}" class="button">
          {!! $testimonial_section['link']['title'] !!}
        </a>
      </div>
    @endif
  </section>
@endif

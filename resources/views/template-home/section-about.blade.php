@if ($about_section)
  <section id="about" class="py-16 md:py-20 container">
    @if ($about_section['title'])
      <h3 class="text-2xl leading-normal md:text-[32px] font-bold text-gray-900 text-center mb-8">
        {{ $about_section['title'] }}
      </h3>
    @endif

    <div class="flex flex-col space-y-8 lg:space-y-0 lg:space-x-28 lg:flex-row lg:items-center lg:justify-between">
      @if ($about_section['description'])
        <div class="text-justify prose-sm md:prose-2xl">
          {!! $about_section['description'] !!}
        </div>
      @endif

      @if($about_section['image'])
        <img
          class="pt-8 lg:pt-0 w-full max-w-[435px] mx-auto"
          src="{{ $about_section['image']['url'] }}"
        >
      @endif
    </div>
  </section>
@endif

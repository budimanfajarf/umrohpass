@if ($about_section)
  <section id="about" class="my-16 md:my-24 container">
    @if ($about_section['title'])
      <x-heading-section :title="$about_section['title']" />
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

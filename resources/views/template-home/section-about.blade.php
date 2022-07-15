@if ($about_section)
  <section class="py-16 md:py-20 container">
    <h4 class="text-2xl leading-normal md:text-[32px] font-bold tracking-tight text-gray-900 text-center mb-8">
      {{ $about_section['title'] }}
    </h4>

    <div class="flex flex-col space-y-8 lg:space-y-0 lg:space-x-28 lg:flex-row lg:items-center lg:justify-between">
      <div class="text-justify md:text-xl lg:leading-normal xl:text-2xl xl:leading-normal">
        {{ $about_section['description']}}
      </div>

      @if($about_section['image'])
        <img
          class="pt-8 lg:pt-0 lg:max-w-[435px]"
          src="{{ $about_section['image']['url'] }}"
        >
      @endif
    </div>
  </section>
@endif

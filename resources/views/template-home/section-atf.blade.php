@if ($atf_section)
  @php($background_image_url = $atf_section['background_image']['url'] ?? $placeholder_image_url )

  <section
    id="atf"
    class="section-atf relative pt-10 pb-20 w-full bg-cover bg-center text-white flex flex-col"
    style="background-image: url('{{ $background_image_url }}')"
  >
    <div class="bg-[#EEF1F4] opacity-50 absolute inset-0 w-full h-full"></div>
    <div class="container my-auto relative">
      <div class="rounded-[10px] bg-brandblue p-6 pt-12 pb-16 md:px-8 max-w-[526px]">
        <h5 class="mb-5 md:mb-10 text-[20px] leading-normal md:text-2xl md:leading-normal font-bold">
          {!! $atf_section['title'] !!}
        </h5>
        <div class="mb-40 prose-sm md:prose-base max-w-[412px]">
          {!! $atf_section['description'] !!}
        </div>
        <a href="#" class="button mb-5">
          {!! $atf_section['button_label'] !!}
        </a>
        <div class="prose-sm md:prose-base">
          <a href="#" class="flex items-center">
            Mengapa memilih kami?
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 hidden lg:flex justify-center w-full">
      <a href="#about">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18.525 21.475L30 32.925L41.475 21.475L45 25L30 40L15 25L18.525 21.475Z" fill="#221F26"/>
        </svg>
      </a>
    </div>
  </section>
@endif

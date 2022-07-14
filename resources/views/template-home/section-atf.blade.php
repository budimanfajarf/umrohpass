@if ($atf_section)
  @php($background_image_url = $atf_section['background_image']['url'] ?? $placeholder_image_url )

  <section
    class="section-atf py-20 w-full bg-cover bg-center"
    style="background-image: url('{{ $background_image_url }}')"
  >
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-2 text-white">
        {!! $atf_section['title'] !!}
      </h2>
      <h3 class="text-2xl mb-8 text-gray-200">
        {!! $atf_section['description'] !!}
      </h3>
      <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
        {!! $atf_section['button_label'] !!}
      </button>
    </div>
  </section>
@endif

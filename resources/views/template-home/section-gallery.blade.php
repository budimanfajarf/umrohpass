@if ($gallery_section)
  <section id="gallery" class="py-16 md:py-20 container">
    @if ($gallery_section['title'])
      <x-heading-section :title="$gallery_section['title']" />
    @endif

    @if ($gallery_section['items'])
      <div class="js-gallery-slider -mx-3">
        @foreach($gallery_section['items'] as $item)
          <div class="px-3 w-full">
            <a
              href="{{ $item['instagram_url'] ?: 'javascript:void(0)' }}"
              target="{{ $item['instagram_url'] ? '_blank' : '' }}"
              class="gallery block relative bg-white rounded-[10px] w-[150px] md:w-[200px] lg:w-[235px] mx-auto h-[200px] md:h-[280px] lg:h-[320px] overflow-hidden"
            >
              @php($image_url = $item['image']['url'] ?: $placeholder_image_url)

              <img
                src="{{ $image_url }}"
                class="w-full h-full object-cover object-center"
              >

              <div class="overlay absolute inset-0 w-full h-full bg-[#C4C4C4] bg-opacity-80 flex flex-col items-center justify-center p-9 md:p-10 text-center">
                <h4 class="text-white mb-2 font-bold text-xsp md:text-base">
                  Open in Instagram
                </h4>
                <svg class="w-[28px] h-[28px] md:w-[68px] md:h-[68px]" width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.0002 22.8049C27.8357 22.8049 22.805 27.8355 22.805 34C22.805 40.1644 27.8357 45.1951 34.0002 45.1951C40.1646 45.1951 45.1953 40.1644 45.1953 34C45.1953 27.8355 40.1646 22.8049 34.0002 22.8049ZM67.5771 34C67.5771 29.364 67.6191 24.7701 67.3588 20.1426C67.0984 14.7676 65.8722 9.99725 61.9418 6.06679C58.0029 2.12792 53.241 0.910149 47.866 0.649797C43.23 0.389446 38.6361 0.431438 34.0086 0.431438C29.3726 0.431438 24.7787 0.389446 20.1511 0.649797C14.7761 0.910149 10.0058 2.13632 6.07535 6.06679C2.13648 10.0057 0.918709 14.7676 0.658357 20.1426C0.398006 24.7785 0.439998 29.3724 0.439998 34C0.439998 38.6275 0.398006 43.2299 0.658357 47.8574C0.918709 53.2324 2.14488 58.0027 6.07535 61.9332C10.0142 65.872 14.7761 67.0898 20.1511 67.3502C24.7871 67.6105 29.381 67.5685 34.0086 67.5685C38.6445 67.5685 43.2384 67.6105 47.866 67.3502C53.241 67.0898 58.0113 65.8636 61.9418 61.9332C65.8806 57.9943 67.0984 53.2324 67.3588 47.8574C67.6275 43.2299 67.5771 38.6359 67.5771 34ZM34.0002 51.2252C24.4679 51.2252 16.775 43.5322 16.775 34C16.775 24.4678 24.4679 16.7748 34.0002 16.7748C43.5324 16.7748 51.2254 24.4678 51.2254 34C51.2254 43.5322 43.5324 51.2252 34.0002 51.2252ZM51.9308 20.0922C49.7052 20.0922 47.908 18.2949 47.908 16.0693C47.908 13.8437 49.7052 12.0465 51.9308 12.0465C54.1564 12.0465 55.9537 13.8437 55.9537 16.0693C55.9543 16.5978 55.8507 17.1212 55.6488 17.6096C55.4469 18.098 55.1506 18.5417 54.7769 18.9154C54.4032 19.2891 53.9595 19.5854 53.4711 19.7873C52.9827 19.9892 52.4593 20.0928 51.9308 20.0922Z" fill="#FAFAFA"/>
                </svg>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    @endif
  </section>
@endif

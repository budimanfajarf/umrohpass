@if ($registration_section && $registration_section['form'])
  <section id="registration" class="section-registration py-8 md:py-12 container">
    <div class="border border-brandgray border-opacity-40 rounded-[10px] px-5 py-9 md:p-10 xl:px-14 xl:py-11">
      @if ($registration_section['title'])
        <x-heading-section :title="$registration_section['title']" class="mb-6 md:mb-6" />
      @endif

      @if ($registration_section['description'])
        <div class="text-center prose-sm md:prose-lg">
          {!! $registration_section['description'] !!}
        </div>
      @endif

      <div class="-gform">
        @php
          // gravity_form( $id, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = false, $tabindex = 1, $echo = true )
          gravity_form($registration_section['form']['id'], false, false, false, null, true, 1, true);
        @endphp
      </div>
    </div>
  </section>
@endif

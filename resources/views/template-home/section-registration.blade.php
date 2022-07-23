@if ($registration_section && $registration_section['form'])
  <section id="registration" class="-gform py-8 md:py-12 container">
    @if ($registration_section['title'])
      <x-heading-section :title="$registration_section['title']" class="mb-6 md:mb-6" />
    @endif

    @if ($registration_section['description'])
      <div class="text-center prose-sm md:prose-lg mb-8 md:mb-14">
        {!! $registration_section['description'] !!}
      </div>
    @endif

    @php
      // gravity_form( $id, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = false, $tabindex = 1, $echo = true )
      gravity_form($registration_section['form']['id'], false, false, false, null, true, 1, true);
    @endphp
  </section>
@endif

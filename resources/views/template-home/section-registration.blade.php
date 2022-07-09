@if ($registration_section['form'])
  @php
    // gravity_form( $id,  $display_title = true,  $display_description = true,  $display_inactive = false,  $field_values = null,  $ajax = false,  $tabindex = 1,  $echo = true )
    gravity_form( $registration_section['form']['id'], false, false, false,  null,  true, 1, true )
  @endphp
@endif

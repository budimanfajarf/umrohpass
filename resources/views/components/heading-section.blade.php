@php
  $default_class = 'text-2xl md:text-3xlp font-bold text-gray-900 text-center mb-8 md:mb-14';
  $classess = $default_class;

  if (isset($class)) {
    $classess .= ' ' . $class;
  }
@endphp

<h3 {{ $attributes->merge([ 'class' =>  $classess ]) }}>
  {!! $title ?? $slot !!}
</h3>

@php($default_class = 'text-2xl md:text-3xlp font-bold text-gray-900 text-center mb-8 md:mb-10')

<h3 {{ $attributes->merge([ 'class' =>  $default_class . ' ' . $class ]) }}>
  {!! $title ?? $slot !!}
</h3>

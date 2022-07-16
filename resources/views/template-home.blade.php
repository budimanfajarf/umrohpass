{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('template-home.section-atf')
    @include('template-home.section-about')
    @include('template-home.section-testimonial')
    @include('template-home.section-gallery')
    @include('template-home.section-package')
    {{-- @include('template-home.section-registration') --}}
  @endwhile
@endsection

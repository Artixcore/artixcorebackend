@extends('frontend.layouts')
@section('style_css')
@endsection
@section('title')
    Welcome to Artixcore
@endsection


@section('content')
    <!-- Hero Section -->
    @include('frontend.Home.Header')

    {{-- @include('frontend.Home.Client') --}}

    @include('frontend.Home.About')

    @include('frontend.Home.Service')

    <!-- Testimonials Section -->
    @include('frontend.Home.Testimonial')
    <!-- Portfolio Section -->

    <!-- Portfolio -->
    @include('frontend.Home.portfolio')

    <!-- Faq Section -->
    @include('frontend.Home.faq')
    <!-- /Faq Section -->

    <!-- Recent Posts Section -->
    @include('frontend.Home.blogs')
    <!-- /Recent Posts Section -->

    <!-- Contact Section -->
    @include('frontend.Home.contact')
    <!-- /Contact Section -->
@endsection

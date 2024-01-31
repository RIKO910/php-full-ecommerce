@extends('frontend.layouts.master')

@section('frontendtitle')
    Home Page
@endsection

@section('frontend_content')
    <!-- slider-area start -->
    @include('frontend.pages.widgets.slider')
    <!-- slider-area end -->
    <!-- featured-area start -->
    @include('frontend.pages.widgets.featured')
    <!-- featured-area end -->
    <!-- start count-down-section -->
    @include('frontend.pages.widgets.countdown')
    <!-- end count-down-section -->
    <!-- best seller product-area start -->
    @include('frontend.pages.widgets.bestseller')
    <!-- best seller product product-area end -->
    <!-- latest product-area start -->
    @include('frontend.pages.widgets.latest-product')
    <!-- latest product-area end -->
    <!-- testmonial-area start -->
    @include('frontend.pages.widgets.testmonial')
    <!-- testmonial-area end -->
@endsection

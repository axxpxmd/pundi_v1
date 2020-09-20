@extends('layouts.app')
@section('content')
    <!-- Header -->
    @include('masterPages.headers.header')
    <!-- Section 1 -->
    @include('pages.homePage.section1')
    <!-- Section 2 -->
    @include('pages.homePage.section2')
    <!-- Section 3 -->
    @include('pages.homePage.section3')
@endsection
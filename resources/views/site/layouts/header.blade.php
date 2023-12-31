<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'en' ? 'en' : 'ar' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset(App\Models\Setting::query()->first()->logo) }}" type="image/x-icon">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Swiper --}}
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    {{-- main style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    {{--Owl Carousel--}}
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <title>{{ asset(App\Models\Setting::query()->first()->title()) }}</title>
</head>

<body>

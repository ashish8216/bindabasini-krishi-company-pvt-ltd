<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('frontend::partials.header')

    @vite(['Modules/Frontend/resources/css/app.css'])

</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')

    <x-frontend::layouts.header />

    <main>
        {{ $slot }}
    </main>

    <x-frontend::layouts.footer />

    <x-frontend::layouts.handleScrollToTop />

    @include('frontend::partials.footer')

    @vite(['Modules/Frontend/resources/js/app.js'])


</body>

</html>

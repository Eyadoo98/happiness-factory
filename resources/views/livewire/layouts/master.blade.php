@php
    use Illuminate\Support\Facades\Session;
@endphp
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body>


    @livewire('happiness-factory.header')

    {{ $slot }}


    @livewire('happiness-factory.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    @livewireScripts

</body>

</html>

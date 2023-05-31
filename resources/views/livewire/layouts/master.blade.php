@php
    use Illuminate\Support\Facades\Session;
@endphp
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('livewire.partials.styles') {{-- include styles --}}


</head>

<body>

    {{ $slot }}

    @include('livewire.partials.scripts') {{-- include scripts --}}

</body>

</html>

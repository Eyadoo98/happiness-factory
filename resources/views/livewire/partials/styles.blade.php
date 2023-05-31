{{-- fontawsem --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- flowbite --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

{{-- alpine js --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- slick css --}}
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


<style>
    [x-cloak] {
        display: none
    }

    .slick-prev,
    .slick-next {
        z-index: 2;
    }

    .slick-prev {
        left: 25px;
    }

    .slick-next {
        right: 25px;
    }

    .slick-slide {
        height: unset !important;
    }

    .arrow_prev{
        position: absolute;
        top: 30%;
        left: 0%;
        margin-left: -19px;
    }
    .arrow_next{
        position: absolute;
        top: 30%;
        right: 0%;
        margin-right: -19px;
    }

    /* .slick-arrow {
        height: 270px;
    }

    @media(max-width:600) {
        .slick-arrow {
            height: 170px;
        }
    }

    .slick-prev:before {
        content: url('images/arrow-left.png');
    }

    .slick-next:before {
        content: url('your-arrow.png');
    } */
</style>

@livewireStyles
@vite('resources/css/app.css')

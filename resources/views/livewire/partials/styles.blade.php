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

    .arrow_prev   {
        position: absolute;
        top: 30%;
        left: 0%;
        margin-left: -19px;
    }
    .arrow_prev_carousel{
        position: absolute;
        top: 7%;
        left: -3%;
        margin-left: -19px;
    }

    @media (max-width: 1275px) {
        .arrow_prev {
            position: absolute;
            top: 16%;
        }
        .arrow_prev_carousel {
            position: absolute;
            top: 16%;
        }
    }

    @media (max-width: 600px) {
        .arrow_prev {
            position: absolute;
            top: 5% !important;
        }
        .arrow_prev_carousel {
            position: absolute;
            top: 5% !important;
        }
    }

    .arrow_next {
        position: absolute;
        top: 30%;
        right: 0%;
        margin-right: -19px;
    }

    .arrow_next_carousel{
        position: absolute;
        top: 2%;
        right: -2%;
        margin-right: -19px;
    }
    @media (max-width: 1275px) {
        .arrow_next {
            position: absolute;
            top: 16%;
        }
        .arrow_next_carousel {
            position: absolute;
            top: 16%;
        }
    }

    @media (max-width: 600px) {
        .arrow_next {
            position: absolute;
            top: 5% !important;
        }
        .arrow_next_carousel {
            position: absolute;
            top: 5% !important;
        }
    }

    @media (max-width: 1300px) {
        .customMedium {
            display: none !important;
            background-color: red !important;
        }
    }

    /* .carouselMultiImage .slick-slide {
        width:  100% !important;
    } */
    .bg-white .shadow-xl .mr-4 .slick-slide .slick-current .slick-active {
        background-color: red !important;
    }

    /* todo:if design not response fix slick-slide*/
    .story-success .slick-slide {
        margin: 0 10px;
    }


    .carouselMultiImage .slick-slide {
        min-width: 200px !important;
        min-height: 150px !important;
        /* max-height: 100% !important; */
    }

    /* .carouselMultiImage .slider{
        width: 50% !important;
        margin: 100px  auto;
    } */

</style>

@livewireStyles
@vite('resources/css/app.css')

{{-- flowbite section --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
{{-- JQuery cdn --}}
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{-- slick js --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{-- JQuery cdn --}}

<script>
    $(document).ready(function() {
        $('.your-class').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
        });

        $('.story-success').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            // arrows: false,
            prevArrow: ".arrow_prev",
            nextArrow: ".arrow_next"

        });

        $('.carouselMultiImage').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
</script>

@livewireScripts

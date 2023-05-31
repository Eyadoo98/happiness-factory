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
            prevArrow:".arrow_prev",
            nextArrow:".arrow_next"

        });
    });
</script>

@livewireScripts

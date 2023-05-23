{{-- <div> --}}
    {{-- @livewire('happiness-factory.header')
    @livewire('happiness-factory.footer') --}}

{{-- </div> --}}

<div class="h-3/4 bg-orange-900"
    style="background-image: url('https://cdnb.artstation.com/p/assets/images/images/027/347/511/large/renderpeople-gmbh-renderpeople-free-3d-people-header-new-notext.jpg?1591275648')">


    <span class="text-orange-500 ltr:pl-5 text-cyan-500 rtl:pr-5  text-white">
        {{ __('welcome') }}
        {{ $test }}
        </span>
    <div class="container mx-auto">
        <div class="h-9"></div>

        <span class="text-white">{{ $data }}</span>
        <div class="flex justify-between item-center">
            <div>
                {{-- <img src="{{ url('images/undraw.svg') }}" class="w-20" alt="logo"> --}}
            </div>

            <div>
                <div class="space-x-11 hidden md:block text-white">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Our Project</a>
                    <a href="#" class="rtl:text-blue-500 ltr:text-yellow-600">The Happiness Creator</a>
                    <a href="#" class="rtl:text-red-500">CONTUCT US</a>
                    <a href="#" class="switchLang">عربي</a>
                </div>
            </div>
        </div>


        @if ( App::currentLocale() == 'en')
            <button wire:click='switchLang("ar")' class="text-white">Arabic</button>
        @else
            <button wire:click='switchLang("en")' class="text-white">English</button>
        @endif


        {{-- carousel --}}


        <div style="height: 200px;"></div>


        <div id="indicators-carousel" class="relative md:w-600" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out text-white" data-carousel-item="active">
                    <div>
                        <h1 class="absolute md:top-16 z-10 rtl:pr-5">THE ONLYWAYTO LIVE IS</h1>
                        <h1 class="absolute top-1/4 z-10">TO EXPERIENCE</h1>
                        <p class="absolute top-1/3 z-10">
                            At The Happiness Factory, We Cherish The Value Of New
                            Experiences ,We Believe That It‘S Essential For Every Human
                            To Live More And More Experiences And Stories. With This
                            Spark In Mind, We Provide Well Curated Journeys And Work
                            On Creating Valuable Experiences To All Our Clients
                        </p>

                        {{-- <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..."> --}}
                    </div>



                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-14">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>

        </div>



        {{-- carousel --}}
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</div>

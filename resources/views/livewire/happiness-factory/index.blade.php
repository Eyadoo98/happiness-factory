<div class="h-3/4 bg-orange-900"
    style="background-image: url('https://cdnb.artstation.com/p/assets/images/images/027/347/511/large/renderpeople-gmbh-renderpeople-free-3d-people-header-new-notext.jpg?1591275648')">

    <div class="container mx-auto">
        <div class="h-9"></div>

        {{-- <span class="text-white">{{ $data }}</span> --}}
        <div class="flex justify-between item-center">
            <div>
                <img src="{{ url('images/undraw.svg') }}" class="w-20" alt="logo">
            </div>

            <div>
                <div class="space-x-11 hidden md:block text-white">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Our Project</a>
                    <a href="#">The Happiness Creator</a>
                    <a href="#" class="rounded-full border border-orange-500 px-5 py-2">CONTUCT US</a>
                    <a href="#" class="switchLang">
                        @if (App::currentLocale() == 'en')
                            <button wire:click='switchLang("ar")' class="text-white">عربي</button>
                        @else
                            <button wire:click='switchLang("en")' class="text-white">English</button>
                        @endif
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="h-72"></div> --}}
        <div class="flex mt-16 flex-col md:flex-col lg:flex-row">


           {{-- carousel --}}


           <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <h1 class="text-white text-4xl font-bold">THE ONLYWAYTO LIVE IS</h1>
                        <h1 class="text-orange-300  lg:text-4xl md:text-4xl text-4xl font-bold ">TO EXPERIENCE</h1>
                        <p class="text-white w-1/2 leading-8">
                            At The Happiness Factory, We Cherish The Value Of New
                            Experiences ,We Believe That It‘S Essential For Every Human
                            To Live More And More Experiences And Stories. With This
                            Spark In Mind, We Provide Well Curated Journeys And Work
                            On Creating Valuable Experiences To All Our Clients.
                        </p>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <h1 class="text-white text-4xl font-bold">THE ONLYWAYTO LIVE IS</h1>
                    <h1 class="text-orange-300  text-6xl font-bold leading-8">TO EXPERIENCE</h1>
                    <p class="text-white w-1/2">
                        At The Happiness Factory, We Cherish The Value Of New
                        Experiences ,We Believe That It‘S Essential For Every Human
                        To Live More And More Experiences And Stories. With This
                        Spark In Mind, We Provide Well Curated Journeys And Work
                        On Creating Valuable Experiences To All Our Clients.
                    </p>
            </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3">
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

            {{-- carousel --}}
        </div>
            <div class="text-opacity-0">
                <h1 class="text-white text-4xl font-bold text-opacity-0">THE ONLYWAYTO LIVE IS</h1>
                <h1 class="text-orange-300  text-6xl font-bold text-opacity-0">TO EXPERIENCE</h1>
                <p class="text-white w-1/3 text-opacity-0">
                    At The Happiness Factory, We Cherish The Value Of New
                    Experiences ,We Believe That It‘S Essential For Every Human
                    To Live More And More Experiences And Stories. With This
                    Spark In Mind, We Provide Well Curated Journeys And Work
                    On Creating Valuable Experiences To All Our Clients.
                </p>
            </div>


            <div style="height: 550px;"></div>

        </div>



        @livewire('happiness-factory.build-your-dream')

        @livewire('happiness-factory.made-with-happiness-section')

        @livewire('happiness-factory.the-x-factor')

        @livewire('happiness-factory.concept-section')

        @livewire('happiness-factory.experience-services-section')

        @livewire('happiness-factory.remember-section')

        @livewire('happiness-factory.customer-section')


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </div>

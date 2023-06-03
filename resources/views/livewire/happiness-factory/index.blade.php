<div class="h-3/4 bg-orange-900"
    style="background-image: url('https://cdnb.artstation.com/p/assets/images/images/027/347/511/large/renderpeople-gmbh-renderpeople-free-3d-people-header-new-notext.jpg?1591275648')">

    {{-- <span class="text-white">
        <pre>
            {{ $data}}
        </pre>
    </span> --}}

    {{-- <span class="text-white">
        @foreach ($data as $key => $value )
            {{ $value->title }}
        @endforeach
    </span> --}}
    <div class="container mx-auto">
        <div class="h-9"></div>

        {{-- <span class="text-white">{{ $data }}</span> --}}
        <div class="flex justify-between item-center lg:px-12 px-0">
            <div>
                <img src="{{ url('images/undraw.svg') }}" class="w-20 md:ml-0 ml-9" alt="logo">
            </div>

            <div>
                <div class="lg:space-x-14 space-x-5 hidden md:block text-white">
                    <a href="#" wire:click="indexPage">Home</a>
                    <a href="#" wire:click="aboutPage">About Us</a>
                    <a href="#" wire:click="ourProjectPage">Our Project</a>
                    <a href="#" wire:click="happinessCreatorPage">The Happiness Creator</a>
                    <a href="#" wire:click="contactPage"
                        class="rounded-full border border-orange-500 px-5 py-2">CONTACT US</a>
                    <a href="#" class="switchLang">
                        @if (App::currentLocale() == 'en')
                            <button wire:click='switchLang("ar")' class="text-white">عربي</button>
                        @else
                            <button wire:click='switchLang("en")' class="text-white rtl:mr-5">English</button>
                        @endif
                    </a>


                </div>
                {{-- menu --}}
                <a href="#" id="mobile-btn" class="md:hidden text-white">
                    <i class="fa fa-bars px-9"></i>
                </a>

                <div class="md:hidden">
                    <div id="mobile-menu" style="z-index: 9999999999"
                        class="absolute flex hidden flex-col bg-gray-50 py-8 left-6 right-6 items-center space-y-2 font-bold drop-shadow-lg border-gray-300">
                        <a href="javascripit:void(0)">Home</a>
                        <a href="javascripit:void(0)" wire:click="aboutPage">About Us</a>
                        <a href="javascripit:void(0)" wire:click="ourProjectPage">Our Project</a>
                        <a href="javascripit:void(0)" wire:click="happinessCreatorPage">The Happiness Creator</a>
                        <a href="javascripit:void(0)" wire:click="contactPage"
                            class="rounded-full border border-orange-500 px-5 py-2">CONTACT US</a>
                        <a href="javascripit:void(0)" class="switchLang">
                            @if (App::currentLocale() == 'en')
                                <button wire:click='switchLang("ar")' class="text-white">عربي</button>
                            @else
                                <button wire:click='switchLang("en")' class="text-white">English</button>
                            @endif
                        </a>
                    </div>
                </div>
                {{-- menu --}}
            </div>
        </div>

        <script>
            const mobileBtn = document.querySelector('#mobile-btn');
            const mobileMenu = document.querySelector('#mobile-menu');
            mobileBtn.addEventListener('click', () => {

                mobileMenu.classList.toggle('hidden');
            });
        </script>

        {{-- <div class="h-72"></div> --}}
        <div class="flex mt-16 flex-col md:flex-col lg:flex-row md:px-14 px-9">

            <div class="md:w-1/2 w-full">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h1 class="text-white text-4xl font-bold md:mb-5">THE ONLYWAYTO LIVE IS</h1>
                            <h1 class="text-orange-300  lg:text-4xl md:text-4xl text-4xl font-bold md:mb-5">TO
                                EXPERIENCE</h1>
                            <p class="text-white leading-8">
                                At The Happiness Factory, We Cherish The Value Of New
                                Experiences ,We Believe That It‘S Essential For Every Human
                                To Live More And More Experiences And Stories. With This
                                Spark In Mind, We Provide Well Curated Journeys And Work

                            </p>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h1 class="text-white text-4xl font-bold md:mb-5">THE ONLYWAYTO LIVE IS</h1>
                            <h1 class="text-orange-300  lg:text-4xl md:text-4xl text-4xl font-bold md:mb-5">TO
                                EXPERIENCE</h1>
                            <p class="text-white leading-8">
                                At The Happiness Factory, We Cherish The Value Of New
                                Experiences ,We Believe That It‘S Essential For Every Human
                                To Live More And More Experiences And Stories. With This
                                Spark In Mind, We Provide Well Curated Journeys And Work

                            </p>
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 ">
                        <button type="button" class="w-3 h-3 rounded-full rtl:ml-4" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    </div>
                </div>

            </div>
            <div class="w-1/2"></div>

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
</div>





@livewire('happiness-factory.made-with-happiness-section')

@livewire('happiness-factory.remember-section')

@livewire('happiness-factory.our-story-success-section')

@livewire('happiness-factory.happiness-creators-carousel-section')

@livewire('happiness-factory.partners-section')

@livewire('happiness-factory.our-services-section')

@livewire('happiness-factory.build-your-dream')



{{-- here --}}

{{-- @livewire('happiness-factory.the-x-factor')

        @livewire('happiness-factory.concept-section')

        @livewire('happiness-factory.experience-services-section') --}}

{{-- here --}}

{{-- @livewire('happiness-factory.build-your-dream') --}}

{{-- @livewire('happiness-factory.happiness-team-section') --}}

{{-- @livewire('happiness-factory.project-name-here-section')

        @livewire('happiness-factory.creators-section')

        @livewire('happiness-factory.our-values-section') --}}

{{-- @livewire('happiness-factory.customer-section') --}}

{{-- @livewire('happiness-factory.build-your-dream') --}}

{{-- @livewire('happiness-factory.header-section')

        @livewire('happiness-factory.select-option-section') --}}



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</div>

<div>
    <div class="bg-slate-950 p-5 py-14">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ url('images/undraw.svg') }}" class="w-20" alt="logo">
                </div>

                <div>
                    <div class="space-x-11 hidden md:block text-white">
                        <a href="javascript:void(0)" wire:click="indexPage">Home</a>
                        <a href="javascript:void(0)" wire:click="aboutPage">About Us</a>
                        <a href="javascript:void(0)" wire:click="ourProjectPage">Our Project</a>
                        <a href="javascript:void(0)" wire:click="happinessCreatorPage">The Happiness Creator</a>
                        <a href="javascript:void(0)" wire:click="contactPage" class="rounded-full px-5 py-2 bg-tomato">CONTUCT
                            US</a>
                        <a href="javascript:void(0)" class="switchLang">
                            @if (App::currentLocale() == 'en')
                                <button wire:click='switchLang("ar")' class="text-white">عربي</button>
                            @else
                                <button wire:click='switchLang("en")' class="text-white">English</button>
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
                            <a href="javascripit:void(0)" wire:click="indexPage">Home</a>
                            <a href="javascripit:void(0)" wire:click="aboutPage">About Us</a>
                            <a href="javascripit:void(0)" wire:click="ourProjectPage">Our Project</a>
                            <a href="javascripit:void(0)" wire:click="happinessCreatorPage">The Happiness Creator</a>
                            <a href="javascripit:void(0)" wire:click="contactPage"
                                class="rounded-full border border-orange-500 px-5 py-2">CONTACT US</a>
                            <a href="javascripit:void(0)" class="switchLang">
                                @if (App::currentLocale() == 'en')
                                    <button wire:click='switchLang("ar")' class="md:text-white text-black">عربي</button>
                                @else
                                    <button wire:click='switchLang("en")' class="text-white text-black">English</button>
                                @endif
                            </a>
                        </div>
                    </div>
                    {{-- menu --}}
                    <script>
                        const mobileBtn = document.querySelector('#mobile-btn');
                        const mobileMenu = document.querySelector('#mobile-menu');
                        mobileBtn.addEventListener('click', () => {
                            mobileMenu.classList.toggle('hidden');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container mx-auto px-16 bg-white shadow-2xl shadow-white-500/50 rounded-lg text-center pt-5">
        <div class="flex md:flex-row flex-col">
            <div class="w-1/4"></div>
            <div class="md:w-1/2 w-full text-left">
                <i class="fa fa-car"></i>
                <h1 class="font-bold text-slate-900 text-2xl inline-block">{{ $mainContent }}</h1>
                <p class="mt-5 text-slate-900">{{ $subContent }}</p>
                <div class="h-9"></div>
                @livewire('happiness-factory.form-body-section')
            </div>
            <div class="w-1/4"></div>
        </div>
    </div>
</div>

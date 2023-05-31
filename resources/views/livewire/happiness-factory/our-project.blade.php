<div>
    @include('livewire.partials.styles') {{-- include styles --}}

    @include('livewire.happiness-factory.header-section')
    <div class="h-28"></div>
    @livewire('happiness-factory.project-name-here-section')
    <div class="h-36"></div>
    @livewire('happiness-factory.build-your-dream')


    @include('livewire.partials.scripts') {{-- include scripts --}}

</div>

<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Master extends Component
{

    protected $listeners = ['langChanged'];


    public function langChanged($lang)
    {
        App()->setLocale($lang);
    }

    public function render()
    {
        return view('livewire.layouts.master');
    }
}

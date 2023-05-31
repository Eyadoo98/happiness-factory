<?php

namespace App\Http\Livewire\HappinessFactory;

use Livewire\Component;

class FormContentSection extends Component
{
    public $mainContent;
    public $subContent;

    public function mount($mainContent, $subContent)
    {
        $this->mainContent = $mainContent;
        $this->subContent  = $subContent;
    }
    public function render()
    {
        return view('livewire.happiness-factory.form-content-section');
    }
}

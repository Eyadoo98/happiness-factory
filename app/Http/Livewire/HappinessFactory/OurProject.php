<?php

namespace App\Http\Livewire\HappinessFactory;

use Livewire\Component;

class OurProject extends Component
{
    public function render()
    {
        return view('livewire.happiness-factory.our-project');
    }
    public function indexPage()
    {
        return redirect('/index');
    }
    public function contactPage()
    {
        return redirect('/contact');
    }
    public function aboutPage()
    {
        return redirect('/about');
    }
    public function happinessCreatorPage()
    {
        return redirect('/happinessCreator');
    }
    public function ourProjectPage()
    {
        return redirect('/ourProject');
    }
}

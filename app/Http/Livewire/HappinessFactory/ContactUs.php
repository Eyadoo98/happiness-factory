<?php

namespace App\Http\Livewire\HappinessFactory;

use App\Http\Livewire\Layouts\Master;
use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.happiness-factory.contact-us');
    }
    public function switchLang($lang)
    {
        (new Master())->langChanged($lang);
         redirect()->route('lang.switch', app()->getLocale());
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

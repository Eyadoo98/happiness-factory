<?php

namespace App\Http\Livewire\HappinessFactory;

use App\Http\Livewire\Layouts\Master;
use App\Models\Test;
use App\Models\Tests_Translations;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $data = 'hello';
    public $firstTime = true;
    public $test;


    public $direction;

    public function mount()
    {
        // $this->test = Test:: where('locale', app()->getLocale())->first();
        $this->test = Test::query()->first()->translate(app()->getLocale())->title;

        // $this->test->translate('en')->title;
        // dd($this->test);
    }

    public function switchDirection()
    {
        $this->direction = ($this->direction == 'ltr') ? 'rtl' : 'ltr';
        Session::put('direction', $this->direction);

    }

    public function render()
    {
        return view('livewire.happiness-factory.index');
    }

    public function switchLang($lang)
    {
        (new Master)->langChanged($lang);
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

<?php

// use App\Http\Controllers\HappinessFactory\ContactUsController;

use App\Http\Livewire\HappinessFactory\AboutUs;
use App\Http\Livewire\Happinessfactory\ContactUs;
use App\Http\Livewire\HappinessFactory\HappinessCreator;
use App\Http\Livewire\HappinessFactory\Index;
use App\Http\Livewire\HappinessFactory\OurProject;
use App\Models\Test;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index',Index::class)->name('index');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

Route::get('/test', function () {
   $test = Test::create([
    'title' => 'test title',
        'en' => [
            'title' => 'test title',
            'content' => 'test content'
        ],
        'ar' => [
            'title' => 'عنوان الاختبار',
            'content' => 'محتوى الاختبار'
        ],
   ]);
   return $test;
});

Route::get('contact',ContactUs::class)->name('contact');
Route::get('about',AboutUs::class)->name('about');
Route::get('happinessCreator',HappinessCreator::class)->name('happinessCreator');
Route::get('ourProject',OurProject::class)->name('ourProject');


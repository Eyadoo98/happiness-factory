<?php

use App\Http\Livewire\HappinessFactory\Index;
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


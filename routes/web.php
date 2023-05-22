<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        // ogni uno di questi valori va messo col $ davanti
        'page_title' => 'Hello World',
        'description' => "It's a Me, Mario!",
        'members' => [
            'Mario',
            'Luigi',
            'Peach',
            'Toad',
            'DK',
            'Bowser'
        ],
        'teachers' => [],
    ];
    return view('home', $data);
});
// la url la decido io sotto nella '/'
Route::get('/Mario', function () {
    $character = 'Mario';
    $page_title = "It's a Me! Mario!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Mario3_RGB_2.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('Mario', compact('page_title', 'image', 'character'));
});

Route::get('/Luigi', function () {
    $character = 'Luigi';
    $page_title = "It's Luigi Time!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Luigi2_RGB_2.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('Luigi', compact('page_title', 'image', 'character'));
});

Route::get('/Peach', function () {
    $character = 'Peach';
    $page_title = "Oh, yay! I did it!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Peach3_RGB_2.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('Peach', compact('page_title', 'image', 'character'));
});

Route::get('/Toad', function () {
    $character = 'Toad';
    $page_title = "Name's Toad!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Toad12_RGB_2.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('Toad', compact('page_title', 'image', 'character'));
});

Route::get('/DK', function () {
    $character = 'DK';
    $page_title = "It's On!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Donkey2_RGB_2.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('DK', compact('page_title', 'image', 'character'));
});

Route::get('/Bowser', function () {
    $character = 'Bowser';
    $page_title = "Get ready, Mario!";
    $image = 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2022/11/SMB_Char1Sht_Bowser2_RGB_2-1.jpg';
    // compact crea un array, le variabili vanno scritte fra apicetti senza $
    return view('Bowser', compact('page_title', 'image', 'character'));
});

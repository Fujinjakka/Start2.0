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

    $data = config('primoAnno');
    //var_dump($data);
    //dd($data);
    //dump($data);

    $primoAnno = [];
    $secondoAnno = [];
    $terzoAnno = [];

    foreach ($data as $key => $anno) {
        
        $anno['id'] = $key;

        if ($anno["anno"] == "primo") {
            $primoAnno[] = $anno;
        }elseif ($anno["anno"] == "secondo") {
            $secondoAnno[] = $anno;
        }elseif ($anno["anno"] == "terzo") {
            $terzoAnno[] = $anno;
        }
    }
    dump($primoAnno, $secondoAnno, $terzoAnno);

    return view('home', [
        "primoAnno" => $primoAnno,
        "secondoAnno" => $secondoAnno,
        "terzoAnno" => $terzoAnno,
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/prodotto/{id?}', function ($id=0){
    dump($id);
    $data = [
        [
            "modulo" => "M01",
            "nome" => "Phishing",
            "video" => "link a vimeo",
            "anno" => "primo"
        ],
        [
            "modulo" => "M02",
            "nome" => "Smishing",
            "video" => "link a vimeo",
            "anno" => "primo"
        ],
        [
            "modulo" => "M07",
            "nome" => "Vishing",
            "video" => "link a vimeo",
            "anno" => "secondo"
        ],
        [
            "modulo" => "M01",
            "nome" => "Password",
            "video" => "link a vimeo",
            "anno" => "terzo"
        ],
        [
            "modulo" => "M02",
            "nome" => "Security",
            "video" => "link a vimeo",
            "anno" => "terzo"
        ],
        [
            "modulo" => "M03",
            "nome" => "Criminal",
            "video" => "link a vimeo",
            "anno" => "terzo"
        ]
    ];

    return view('product', [
        "product" => $data[$id]
    ]);
})->name('prodotto');



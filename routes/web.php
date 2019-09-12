<?php

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


Route::get('/', 'HeroController@index');


// Route::get('/', function () {

//     // For More Follow us @ParhoLikhoCS
//     //static data
//     $superheroes = [
//         'Thor God of thunder',
//         'Raven',
//         'Aquaman',
//         'Batman',
//         'IronMan',
//         'Parho Likho Computer Science'
        
//     ];

//     return view('welcome' , [
//         'superheroes' => $superheroes, 
//         'js' => '<script>alert("Hey you are hacked");</script>'
//     ]);

//     // Parameter "with" keyword
//     // return view('welcome')->with([
//     //     'superheroes' => $superheroes
//     // ]);

//     //with (with variable name) pass variable as parameter
//     //return view('welcome')->withSuperheroes($superheroes);
// });

// parameter with dynamic but optional

// Route::get('thor/{name?}' , function($name = '"Avengers'){
//     return "God of thunder".$name;
// });


// parameter with 
 
// Route::get('dc/{name}' , function($name = '"Avengers'){
//     return view('hero' , compact('name'));
// });


// view param route name and  viewName

// Route::view('myView' , 'hero');

// Route::get('home', function () {
//     return view('layouts.home');
// });

// Route::get('/hero', function () {
//     return view('hero');
// });



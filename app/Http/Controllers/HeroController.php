<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HeroController extends Controller{
    public function index(){
    
        // For More Follow us @ParhoLikhoCS
        //static data
        $superheroes = [
            'Thor God of thunder',
            'Raven',
            'Aquaman',
            'Batman',
            'IronMan',
            'Parho Likho Computer Science'
            
        ];

        return view('welcome' , [
            'superheroes' => $superheroes, 
            'js' => '<script>alert("Hey you are hacked");</script>'
        ]);

    }
}
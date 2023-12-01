<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index(){
        $formation=Formation::SimplePaginate(6);
        return view('accueil',['f'=>$formation]);
    }

    
    // public function show(Formation $form){
    //     return view('user.formation',compact('form'));
    // }
    public function for(Formation $form){
        return view('user.formation',compact('form'));
    }
}

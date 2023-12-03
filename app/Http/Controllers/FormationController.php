<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Playlist;

class FormationController extends Controller
{
    public function index(){
        $formation=Formation::SimplePaginate(6);
        return view('accueil',['f'=>$formation]);
    }

    
    // public function show(Formation $form){
    //     return view('user.formation',compact('form'));
    // }
    public function for(Formation $form, Request $req){
        $video = Playlist::find($req->query('vid'));
        return view('user.formation',compact('form', 'video'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $formations = Formation::latest()->paginate(6);
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;  
            if($usertype=='user'){
                return view('user.index', compact('formations'));
            }
            else if($usertype=='admin'){
                $users = User::where('usertype', '=', 'user')->latest()->paginate(4);
                $formations = Formation::latest()->take(5)->get();
                return view('admin.index', compact('users','formations'));
            }
            else{
                return redirect()->back();
            }
        }    
    }

    public function form(){
        $id=Auth::user()->id;
        $userForms=DB::table('userforms')
            ->where('user_id',$id)
            ->select('user_id','formation_id')
            ->get();
        // foreach($userForms as $user){
        //     dd(Formation::find($user->formation_id));
        // }
        $formations = Formation::whereIn('id', $userForms->pluck('formation_id'))->get();
        return view('user.mesformation', compact('formations'));
    }
}

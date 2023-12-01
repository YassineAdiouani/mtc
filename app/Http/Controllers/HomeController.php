<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
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
                $users = User::where('usertype', '=', 'user')->count();
                $formations = Formation::All()->count();
                return view('admin.index', compact('users','formations'));
            }
            else{
                return redirect()->back();
            }
       }
    }
}

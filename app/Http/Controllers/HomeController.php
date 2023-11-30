<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;  
            if($usertype=='user'){
                return view('user.pagep');
            }
            else if($usertype=='admin'){
                $users = User::All()->count();
                $formations = Formation::All()->count();
                return view('admin.index', compact('users','formations'));
            }
            else{
                return redirect()->back();
            }
       }
    }
}

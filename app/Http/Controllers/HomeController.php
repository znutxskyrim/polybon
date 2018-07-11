<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserRole;
use App\Role;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
//        dd($user->role);
//        $_userRole = UserRole::where('user_id','=',$user->id)->first();
//        $role = Role::all()->first();
//        dd($role->userrole[0]->user_id);
//        dd($_userRole->user);
////        dd($user->role);
///
        return view('home',['user' => $user]);
    }
}

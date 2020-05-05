<?php

namespace App\Http\Controllers;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index(){
        $users = Users::all();
        return response()->json(['data'=>$users]);

        // bisa juga :
        // return Users::all();
    }
}

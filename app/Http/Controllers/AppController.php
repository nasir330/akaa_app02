<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    public function index()
    {
        $appData = User::all();
        //return $appData;
        return view('main',['appData' => $appData]);
    }
}

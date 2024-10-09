<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task extends Controller
{
    //
    public function index(){
        return view('/user/task/task');
    }
}

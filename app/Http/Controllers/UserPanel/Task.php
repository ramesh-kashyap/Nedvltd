<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Task extends Controller
{
    //
    public function index(){
        return view('/user/task/task');
    }

    public function product(){
        return view('user/task/productDetail');
    }


    public function productinfo(Request $request){
        $user = Auth::user();
        $amount = $request->input('amount');
        $image = $request->input('image');

        $data =[
            'amount' => $amount,
             
        ]
        return response()->json(['success' => true]);
    }
}



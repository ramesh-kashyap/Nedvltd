<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task; // Import the Task model

class TaskController extends Controller // Renamed to TaskController to avoid conflicts
{
    //
    public function index(){
        return view('user/task/task'); // Removed the leading slash
    }

    public function product(){
        return view('user/task/productDetail');
    }

    public function productinfo(Request $request) {
        $request->validate([
            'amount' => 'required|numeric',
            'profit' => 'required|numeric',
            'image' => 'required|string',
        ]);
        
        $user = Auth::user();
        $user_id = $user->id;
        
        $amount = $request->input('amount'); // Retrieving 'amount' from request
        $image = $request->input('image');   // Retrieving 'image' from request
        $profit = $request->input('profit'); // Retrieving 'profit' from request

        // Create data array to insert
        $data = [
            'user_id' => $user_id,
            'price' => $amount,
            'profit' => $profit,
            // 'image' is not included because it's not part of Task table
        ];

        // Insert the data into the Task table
        Task::create($data);

        return response()->json(['success' => true]); // Return success response
    }
}

<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Video; // Import the Task model
use App\Models\Task; // Import the Task model

class TaskController extends Controller // Renamed to TaskController to avoid conflicts
{
    //
    public function index(){

           // Fetch the videos from the database (you can modify this query as needed)
           $video = DB::table('videos')->orderBy('created_at', 'desc')->first();

    // Pass the videos to the Blade view

        return view('user/task/task',compact('video')); // Removed the leading slash
    }

    public function TaskVideo(Request $request)
{
    $vid = $request->input('vid');

    // Fetch the video from the database
    $video = Video::where('id', $vid)->first();

    // If the video doesn't exist, return an error or handle it
    if (!$video) {
        return back()->withErrors(['Video not found.']);
    }

    // Pass the video to the Blade view
    return view('user/task/TaskVideo', compact('video'));
}


    public function product(){
        return view('user/task/productDetail');
    }

    public function productinfo(Request $request)
    {
        // Validate incoming request
        // dd($request->all());
        $request->validate([
            'amount' => 'required|numeric',
            // 'profit' => 'required|numeric',
            'image' => 'required|string',
        ]);
    
        // Get the current logged-in user
        // dd($request->all());
        $user = Auth::user();
        $user_id = $user->id;
         
    
        // Retrieve data from the request
        $amount = $request->input('amount');
        $profit = $request->input('profit');
        $image = $request->input('image');
        // dd($image);
    
        // Prepare data to save to the database
        $data = [
            'user_id' => $user_id,
            'price' => $amount,
            'profit' => $profit,
            'status' =>'0',
        ];
    
        // Save data to the Task model
        Task::create($data);
    
        // Redirect to the product details page and pass the data
        return redirect()->route('user.productDetail')->with('amount', $amount)
            ->with('profit', $profit)->with('status','0')
            ->with('image', $image);
    }
    



    public function updateTaskStatus(Request $request)
    {
        // Validate the request data
        $request->validate([
            'task_id' => 'required|integer',
        ]);

        // Find the task and update the status to 1
        $task = Task::find($request->input('task_id'));
        if ($task) {
            $task->status = 1;
            $task->save();
            return response()->json(['message' => 'Task status updated successfully!']);
        } else {
            return response()->json(['message' => 'Task not found!'], 404);
        }
    }
    
}

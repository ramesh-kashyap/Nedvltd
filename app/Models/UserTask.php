<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'user_tasks';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id', 'task_id', 'sdate'
    ];

    // Define relationship with DailyTask
    public function dailyTask()
    {
        return $this->belongsTo(DailyTask::class, 'task_id');
    }

    // Define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

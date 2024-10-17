<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTask extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'daily_tasks';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'video_id', 'day', 'sdate'
    ];

    // Define relationship with Video
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }

    // Define relationship with UserTask
    public function userTasks()
    {
        return $this->hasMany(UserTask::class, 'task_id');
    }
}

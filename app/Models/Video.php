<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    
    // The table associated with the model
    protected $table = 'videos';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'path', 'title', 'description', 'likes', 'comments', 'background'
    ];

    // Define relationship with DailyTask
    public function dailyTasks()
    {
        return $this->hasMany(DailyTask::class, 'video_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
        'user_id',
        'course_id'

    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'cover',
    ];
    public function users(){
        $this->belongsToMany(User::class);
    }
    public function tags(){
        $this->belongsToMany(Tag::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }
}

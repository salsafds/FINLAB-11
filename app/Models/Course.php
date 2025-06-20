<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'slug', 'link_video', 'durasi', 'tingkat_kesulitan', 'deskripsi'
    ];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
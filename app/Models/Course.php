<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // Asegúrate de que esta línea esté presente

class Course extends Model
{
    use HasFactory;  // El trait se usa aquí

    protected $fillable = ['course_key', 'name', 'cover_image', 'content', 'robotics_kit'];
}


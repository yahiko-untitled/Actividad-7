<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Course as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_key', 'name', 'cover_image', 'content', 'robotics_kit'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}

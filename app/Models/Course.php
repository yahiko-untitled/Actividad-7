<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_key', 'name', 'cover_image', 'content', 'robotics_kit'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}

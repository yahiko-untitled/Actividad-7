<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Group as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'initials'
    ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class, 'eg_id');
    }
}

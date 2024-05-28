<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presenceAndAbsence extends Model
{
    use HasFactory;

    protected $fillable = ['classroom_id', 'term_id', 'status', 'date'];
    public $timestamps = false;
}

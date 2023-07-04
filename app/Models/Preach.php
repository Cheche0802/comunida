<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preach extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'name',
        'status',
        'url',
        'user_id',
    ];
}

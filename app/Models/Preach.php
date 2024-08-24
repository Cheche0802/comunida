<?php

namespace App\Models;

use App\Http\Controllers\Admin\PreachController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preach extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'name',
        'date',
        'status',
        'iframe',
        'extract',
        'user_id',
    ];
    protected $events = [
        'created' =>PreachController::class
    ];
}

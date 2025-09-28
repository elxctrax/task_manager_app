<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class tasks extends Model
{
    /** @use HasFactory<\Database\Factories\TasksFactory> */
    protected $fillable = ['title', 'description', 'is_complete'];
    protected $casts = ['is_complete' => 'boolean',];
    use HasFactory;
}

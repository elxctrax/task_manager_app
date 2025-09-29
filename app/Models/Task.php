<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TasksFactory> */
    protected $fillable = ['title', 'description', 'is_completed'];
    protected $casts = ['is_completed' => 'boolean',];
    protected $table = 'todos';
    use HasFactory;
}

<?php

namespace App\Models;

use App\Enums\TaskPriorities;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'tags',
        'category'
    ];


    protected $casts = [
        'tags' => 'array',
        'priority' => TaskPriorities::class,
        'status' => TaskStatus::class,
    ];
}

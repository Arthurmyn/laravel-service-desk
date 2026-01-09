<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'priority',
        'description',
        'status',
        'user_id',
        'assigned_to',
        'due_date',
    ];
}

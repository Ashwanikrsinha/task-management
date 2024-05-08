<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status', 'deadline', 'assigned_to'];

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}

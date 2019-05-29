<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get the user that own the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

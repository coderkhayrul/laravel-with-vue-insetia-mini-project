<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Task extends Pivot
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

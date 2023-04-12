<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'venue', 'location','city'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
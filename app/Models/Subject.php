<?php

// app/Models/Subject.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];

    public function universities()
    {
        return $this->belongsToMany(University::class);
    }
}

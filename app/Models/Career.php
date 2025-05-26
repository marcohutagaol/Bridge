<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'description2',
        'median_salary',
        'jobs_available',
        'credential',
        'credential_logo',
        'kategoris',
    ];
}


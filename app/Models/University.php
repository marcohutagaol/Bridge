<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    
protected $fillable = [
    'name',
    'degree',
    'tipe',
    'ranking',
    'application_deadline',
    'image_path',
    'row', // Tambahkan ini
];

    protected $dates = ['application_deadline'];
    // app/Models/University.php
public function subjects()
{
    return $this->belongsToMany(Subject::class);
}

}

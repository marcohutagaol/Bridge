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
      public function getTitleAttribute()
    {
        return $this->name;
    }

    // Accessor untuk konsistensi gambar
    public function getImageAttribute()
    {
        return $this->image_path;
    }

public function subjects()
{
    return $this->belongsToMany(Subject::class);
}

// app/Models/University.php
public function wishlists()
{
    return $this->morphMany(Wishlist::class, 'wishlistable');
}


}

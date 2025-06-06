<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'gabungan_semua';

    protected $fillable = [
        'name',
        'image',
        'description',
        'rating',
        'duration_r',
        'institution',
        'institution_logo',
        'kategori'
    ];

    // Accessor untuk konsistensi nama
    public function getTitleAttribute()
    {
        return $this->name;
    }

    // Accessor untuk konsistensi durasi
    public function getDurationAttribute()
    {
        return $this->duration_r ? $this->duration_r . ' hours' : null;
    }

    // Accessor untuk price (jika diperlukan)
    public function getPriceAttribute()
    {
        return $this->attributes['price'] ?? 0;
    }

    public function getTypeAttribute()
    {
        return $this->kategori ?? 'Program';
    }

    public function getAccreditationAttribute()
    {
        return 'Accredited Degree';
    }

    public function getReviewCountAttribute()
    {
        return $this->attributes['review_count'] ?? '1.5K';
    }

    public function getLevelAttribute()
    {
        return $this->attributes['level'] ?? 'Beginner';
    }

    public function getProgramLevelAttribute()
    {
        return $this->attributes['program_level'] ?? 'Bachelor\'s Degree';
    }

    public function getFormattedDurationAttribute()
    {
        return $this->duration_r . ' Hours';
    }

    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }

    public function wishlists()
    {
        return $this->morphMany(Wishlist::class, 'wishlistable');
    }
}
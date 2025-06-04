<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses_certificates';

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
}

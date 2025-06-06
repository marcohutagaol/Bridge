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

    // Accessor untuk konsistensi nama
    public function getTitleAttribute()
    {
        return $this->name;
    }

    // Accessor untuk salary range
    public function getSalaryRangeAttribute()
    {
        return $this->median_salary;
    }

    public function wishlists()
    {
        return $this->morphMany(Wishlist::class, 'wishlistable');
    }
}
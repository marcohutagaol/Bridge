<?php
// 1. PERBAIKAN MODEL WISHLIST
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    // TAMBAHKAN wishlistable_id dan wishlistable_type ke fillable
    protected $fillable = [
        'user_id', 
        'wishlistable_id', 
        'wishlistable_type'
    ];

    public function wishlistable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
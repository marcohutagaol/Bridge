<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bookmarkable_id',
        'bookmarkable_type'
    ];

    // Relationship ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Polymorphic relationship
    public function bookmarkable()
    {
        return $this->morphTo();
    }

    // Static method untuk toggle bookmark
    public static function toggleBookmark($userId, $itemId, $type)
    {
        $bookmark = self::where('user_id', $userId)
                       ->where('bookmarkable_id', $itemId)
                       ->where('bookmarkable_type', $type)
                       ->first();

        if ($bookmark) {
            // Jika sudah ada, hapus bookmark
            $bookmark->delete();
            return false; // Tidak di-bookmark
        } else {
            // Jika belum ada, buat bookmark baru
            self::create([
                'user_id' => $userId,
                'bookmarkable_id' => $itemId,
                'bookmarkable_type' => $type
            ]);
            return true; // Di-bookmark
        }
    }

    // Method untuk cek apakah item sudah di-bookmark
    public static function isBookmarked($userId, $itemId, $type)
    {
        return self::where('user_id', $userId)
                  ->where('bookmarkable_id', $itemId)
                  ->where('bookmarkable_type', $type)
                  ->exists();
    }
}
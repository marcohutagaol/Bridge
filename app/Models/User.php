<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }

    // Add these methods to your User model (App\Models\User)

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    /**
     * Get wishlist items with optional type filtering
     */
    public function getWishlistItems($type = null)
    {
        $query = $this->wishlists()->with('wishlistable');

        if ($type && in_array($type, ['university', 'course', 'career'])) {
            $morphMap = [
                'university' => \App\Models\University::class,
                'course' => \App\Models\Course::class,
                'career' => \App\Models\Career::class,
            ];
            $query->where('wishlistable_type', $morphMap[$type]);
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    /**
     * Check if user has item in wishlist
     */
    public function hasInWishlist($itemId, $itemType)
    {
        $morphMap = [
            'university' => \App\Models\University::class,
            'course' => \App\Models\Course::class,
            'career' => \App\Models\Career::class,
        ];

        if (!isset($morphMap[$itemType])) {
            return false;
        }

        return $this->wishlists()
            ->where('wishlistable_id', $itemId)
            ->where('wishlistable_type', $morphMap[$itemType])
            ->exists();
    }

    /**
     * Add item to wishlist
     */
    public function addToWishlist($itemId, $itemType)
    {
        $morphMap = [
            'university' => \App\Models\University::class,
            'course' => \App\Models\Course::class,
            'career' => \App\Models\Career::class,
        ];

        if (!isset($morphMap[$itemType])) {
            return false;
        }

        $modelClass = $morphMap[$itemType];

        // Check if item exists
        if (!$modelClass::find($itemId)) {
            return false;
        }

        // Check if already in wishlist
        if ($this->hasInWishlist($itemId, $itemType)) {
            return false;
        }

        $this->wishlists()->create([
            'wishlistable_id' => $itemId,
            'wishlistable_type' => $modelClass
        ]);

        return true;
    }

    /**
     * Remove item from wishlist
     */
    public function removeFromWishlist($itemId, $itemType)
    {
        $morphMap = [
            'university' => \App\Models\University::class,
            'course' => \App\Models\Course::class,
            'career' => \App\Models\Career::class,
        ];

        if (!isset($morphMap[$itemType])) {
            return false;
        }

        $deleted = $this->wishlists()
            ->where('wishlistable_id', $itemId)
            ->where('wishlistable_type', $morphMap[$itemType])
            ->delete();

        return $deleted > 0;
    }

    /**
     * Helper method untuk mendapatkan wishlist IDs berdasarkan tipe
     * 
     * @param string $type - tipe item (university, course, career)
     * @return array - array of wishlist item IDs
     */
    public function wishlistedItems($type)
    {
        $map = [
            'university' => University::class,
            'course' => Course::class,
            'career' => Career::class,
        ];

        if (!isset($map[$type])) {
            return [];
        }

        return $this->wishlists()
            ->where('wishlistable_type', $map[$type])
            ->pluck('wishlistable_id')
            ->toArray();
    }

    /**
     * Cek apakah user sudah menambahkan item tertentu ke wishlist
     * 
     * @param int $itemId - ID item
     * @param string $type - tipe item (university, course, career)
     * @return bool
     */
    public function hasWishlisted($itemId, $type)
    {
        $map = [
            'university' => University::class,
            'course' => Course::class,
            'career' => Career::class,
        ];

        if (!isset($map[$type])) {
            return false;
        }

        return $this->wishlists()
            ->where('wishlistable_type', $map[$type])
            ->where('wishlistable_id', $itemId)
            ->exists();
    }
}

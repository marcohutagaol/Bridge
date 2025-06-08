<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'item_type',
        'item_id',
        'checkout_date',
        'status',
        'payment_amount',
        'organization_type',
        'corporation_name',
        'school_name',
        'country',
        'payment_method',
        'card_number',
        'expiry_date',
        'cvc',
    ];

    protected $casts = [
        'checkout_date' => 'datetime',
        'payment_amount' => 'decimal:2',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'item_id');
    }

    public function career()
    {
        return $this->belongsTo(Career::class, 'item_id');
    }

    public function module()
    {
        return $this->belongsTo(University::class, 'item_id');
    }

   public function learningProgress()
    {
        return $this->hasOne(LearningProgress::class, 'order_id', 'order_id');
    }

    // Method untuk membuat atau mendapatkan learning progress
    public function getOrCreateLearningProgress()
    {
        return $this->learningProgress()->firstOrCreate([
            'order_id' => $this->order_id
        ], [
            'progress' => 'none',
            'nilai' => null
        ]);
    }

    // Method untuk update learning progress
    public function updateLearningProgress($progress, $nilai = null)
    {
        $learningProgress = $this->getOrCreateLearningProgress();
        $learningProgress->updateProgress($progress, $nilai);
        
        return $learningProgress;
    }

    // Method untuk check apakah learning sudah selesai
    public function isLearningCompleted()
    {
        $progress = $this->learningProgress;
        return $progress && $progress->isCompleted();
    }

    // Relasi dinamis berbasis item_type
    public function getItemAttribute()
    {
        switch ($this->item_type) {
            case 'course':
                return $this->course;
            case 'career':
                return $this->career;
            case 'module':
                return $this->module;
            default:
                return null;
        }
    }

    public function getItemByType()
    {
        if (!$this->item_type) {
            return null;
        }

        switch ($this->item_type) {
            case 'course':
                if (!$this->relationLoaded('course')) {
                    $this->load('course');
                }
                return $this->course;
            case 'career':
                if (!$this->relationLoaded('career')) {
                    $this->load('career');
                }
                return $this->career;
            case 'module':
                if (!$this->relationLoaded('module')) {
                    $this->load('module');
                }
                return $this->module;
            default:
                return null;
        }
    }

    // Akses item details (frontend ready)
    public function getItemDetailsAttribute()
    {
        $item = $this->getItemByType();
        if (!$item) {
            return [
                'id' => null,
                'name' => 'Item not found',
                'type' => $this->item_type,
                'price' => $this->getDefaultPrice(),
                'image' => null,
                'provider' => 'Unknown Provider',
            ];
        }

        return [
            'id' => $item->id,
            'name' => $item->name ?? $item->title ?? 'Unnamed Item',
            'type' => $this->item_type,
            'price' => $this->getItemPrice(),
            'image' => $this->getItemImage(),
            'provider' => $this->getItemProvider(),
        ];
    }

    public function getItemPrice()
    {
        $item = $this->getItemByType();
        if (!$item) {
            return $this->getDefaultPrice();
        }

        return $item->price ?? $this->getDefaultPrice();
    }

    public function getItemImage()
    {
        $item = $this->getItemByType();
        if (!$item) return null;

        $imageFields = ['institution_logo', 'image', 'logo', 'thumbnail', 'photo', 'image_path'];

        foreach ($imageFields as $field) {
            if (isset($item->$field) && !empty($item->$field)) {
                return $item->$field;
            }
        }

        return null;
    }

    public function getItemProvider()
    {
        $item = $this->getItemByType();
        if (!$item) return 'Unknown Provider';

        switch ($this->item_type) {
            case 'course':
                return $item->institution ?? $item->provider ?? 'Course Provider';
            case 'career':
                return $item->provider ?? $item->credential ?? 'Career Program';
            case 'module':
                return $item->name ?? $item->university ?? 'Learning Module';
            default:
                return 'Unknown Provider';
        }
    }

    public function getDefaultPrice()
    {
        switch ($this->item_type) {
            case 'course':
                return 234505;
            case 'career':
                return 199000;
            case 'module':
                return 99000;
            default:
                return 0;
        }
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeForCourses($query)
    {
        return $query->where('item_type', 'course');
    }

    public function scopeForCareers($query)
    {
        return $query->where('item_type', 'career');
    }

    public function scopeForModules($query)
    {
        return $query->where('item_type', 'module');
    }

    public function scopeWithItemData($query)
    {
        return $query->with('user');
    }

    public function getFormattedOrderIdAttribute()
    {
        return "#{$this->order_id}";
    }

    public function getStatusColorAttribute()
    {
        switch ($this->status) {
            case 'completed':
                return 'success';
            case 'pending':
                return 'warning';
            case 'trial':
                return 'info';
            case 'cancelled':
                return 'danger';
            default:
                return 'secondary';
        }
    }

    public function getFormattedAmountAttribute()
    {
        return 'IDR ' . number_format($this->payment_amount, 0, ',', '.');
    }

    /*
     * Tambahan dari kode baru (tidak mengubah apapun dari kode lama)
     */

    // Versi baru dengan lazy load cek (tetap biarkan meskipun ada getItemByType di atas)
    public function getItemByTypeNew()
    {
        if (!$this->item_type) {
            return null;
        }

        switch ($this->item_type) {
            case 'course':
                if (!$this->relationLoaded('course')) {
                    $this->load('course');
                }
                return $this->course;
            case 'career':
                if (!$this->relationLoaded('career')) {
                    $this->load('career');
                }
                return $this->career;
            case 'module':
                if (!$this->relationLoaded('module')) {
                    $this->load('module');
                }
                return $this->module;
            default:
                return null;
        }
    }


    

}

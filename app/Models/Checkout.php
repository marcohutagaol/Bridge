<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'checkout_date' => 'date',
        'payment_amount' => 'decimal:2',
    ];

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

    // Method untuk mendapatkan harga item
    public function getItemPrice()
    {
        $item = $this->getItemByType();
        if (!$item) {
            return $this->getDefaultPrice();
        }

        return $item->price ?? $this->getDefaultPrice();
    }

    // Method untuk mendapatkan gambar item
    public function getItemImage()
    {
        $item = $this->getItemByType();
        if (!$item) return null;

        // Cek berbagai kemungkinan nama field image
        $imageFields = ['institution_logo', 'image', 'logo', 'thumbnail', 'photo', 'image_path'];
        
        foreach ($imageFields as $field) {
            if (isset($item->$field) && !empty($item->$field)) {
                return $item->$field;
            }
        }

        return null;
    }

    // Method untuk mendapatkan provider/institution
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
}
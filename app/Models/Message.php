<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'subject',
        'message',
        'template_type',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relationship dengan User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope untuk filter berdasarkan status
     */
    public function scopeUnread($query)
    {
        return $query->where('status', 'unread');
    }

    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    public function scopeReplied($query)
    {
        return $query->where('status', 'replied');
    }

    /**
     * Scope untuk filter berdasarkan template type
     */
    public function scopeByTemplate($query, $templateType)
    {
        return $query->where('template_type', $templateType);
    }

    /**
     * Accessor untuk mendapatkan nama template yang lebih readable
     */
    public function getTemplateNameAttribute()
    {
        $templates = [
            'career-guidance' => 'Bimbingan Karir',
            'academic-consultation' => 'Konsultasi Akademik',
            'scholarship-info' => 'Informasi Beasiswa',
            'skill-development' => 'Pengembangan Keterampilan',
            'internship-job' => 'Magang & Lowongan Kerja',
            'research-thesis' => 'Penelitian & Skripsi',
        ];

        return $templates[$this->template_type] ?? 'Umum';
    }

    /**
     * Mark message as read
     */
    public function markAsRead()
    {
        $this->update(['status' => 'read']);
    }

    /**
     * Mark message as replied
     */
    public function markAsReplied()
    {
        $this->update(['status' => 'replied']);
    }
}
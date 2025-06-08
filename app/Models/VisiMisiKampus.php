<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisiKampus extends Model
{
    protected $table = 'visimisi_kampus';

    protected $fillable = [
        'kampus_id',
        'visi',
        'misi',
    ];

    public $timestamps = false;

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'kampus_id');
    }

}


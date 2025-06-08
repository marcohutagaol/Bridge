<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'data_kampus'; // nama tabel custom

    protected $primaryKey = 'id';

    public $timestamps = false; // karena tabel tidak punya created_at dan updated_at

    protected $fillable = [
        'nama',
        'tanggal_berdiri',
        'lokasi',
        'akreditas',
        'tipe',
        'logo',
        'deskripsi',
        'website',
    ];

    public function visimisi()
{
    return $this->hasMany(VisiMisiKampus::class, 'kampus_id');
}

}

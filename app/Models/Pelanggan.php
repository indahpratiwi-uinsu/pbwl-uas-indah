<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pelanggan_id',
        'pelanggan_id_meja',
        'pelanggan_nama',
        'pelanggan_alamat',
        'pelanggan_hp'
    ];
    public function meja() : BelongsTo
    {
        return $this->belongsTo(Meja::class, 'pelanggan_id_meja');
    }
    public function pesanan() :HasMany
    {
        return $this->hasMany(Pesanan::class, 'pesanan_id_pelanggan', 'pesanan_id');    
    }
}

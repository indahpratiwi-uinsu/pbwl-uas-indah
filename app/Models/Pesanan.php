<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan';
    protected $primaryKey = 'pesanan_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pesanan_id',
        'pesanan_id_menu',
        'pesanan_id_meja',
        'pesanan_id_pelanggan',
        'pesanan_jumlah',
        'pesanan_status'
    ];
    public function menu():BelongsTo
    {
        return $this->belongsTo(Menu::class, 'pesanan_id_menu');    
    }
    public function meja() :BelongsTo
    {
        return $this->belongsTo(Meja::class, 'pesanan_id_meja');    
    }
    public function pelanggan():BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pesanan_id_pelanggan');    
    }
}

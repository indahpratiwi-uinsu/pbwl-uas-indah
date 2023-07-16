<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meja extends Model
{
    use HasFactory;
    protected $table = 'tb_meja';
    protected $primaryKey = 'meja_id';
    protected $guarded = '[]';
    protected $fillable = [
        'meja_id',
        'meja_id_menu',
        'meja_nomor',
        'meja_status'
    ];
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'meja_id_menu');    
    }
    public function pesanan(): HasMany
    {
        return $this->hasMany(Pesanan::class, 'pesanan_id_meja', 'meja_id');
    }
}

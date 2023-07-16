<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'tb_menu';
    protected $primaryKey = 'menu_id';
    protected $guarded = '[]';
    protected $fillable = [
        'menu_id',
        'menu_nama',
        'menu_harga'
    ];
    public function meja():HasMany
    {
        return $this->hasMany(Meja::class, 'meja_id_menu','menu_id');    
    }
    public function pesanan():HasMany
    {
        return $this->hasMany(Pesanan::class, 'pesanan_id_menu','menu_id');    
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    public function barang(): BelongsTo   
    {
        return $this->belongsTo(KategoriModel::class, 'barang_id', 'barang_id');
    }
}
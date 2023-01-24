<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // 子から親にアクセス
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}

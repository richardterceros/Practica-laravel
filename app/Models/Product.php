<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    Protected $primaryKey = 'id_producto';

    public function sale_detail()
    {
        return $this->hasMany(Sale_Detail::class, 'id_producto','id_producto');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_Detail extends Model
{
    use HasFactory;

    Protected $table = 'sale_details';
    protected $primaryKey = 'id_detalle';

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'id_venta','id_venta');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_producto','id_producto');
    }
}

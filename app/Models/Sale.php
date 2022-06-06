<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale_Detail;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'id_venta';

    public function sale_detail()
    {
        return $this->hasMany(Sale_Detail::class, 'id_venta','id_venta');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale_Detail;
use App\Http\Controllers\SaleController;
use GuzzleHttp\Psr7\Request;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'id_venta';

    public function sale_detail()
    {
        return $this->hasMany(Sale_Detail::class, 'id_venta','id_venta');
    }

    public static function storeSale(Request $request)
    {
        $sale = new Sale();
        $sale->cliente = $request->input('cliente');
        $sale->nit = $request->input('nit');
        $sale->total = $request->input('total',0);
        $sale->cancelado = $request->input('cancelado','');
        $sale->cambio=$request->input('cambio','');
        $sale->fecha = $request->input('fecha');
        $sale->hora = $request->input('hora');
        $sale->estado = 1;
     
        $sale->save();
    }

}

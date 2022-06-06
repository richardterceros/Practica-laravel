<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
 
class SaleController extends Controller
{
    public function create(Request $request)
    {
        try{
            $cliente=$request->input('cliente');
            $nit=$request->input('nit');
            $total=$request->input('total');
            $cancelado=$request->input('cancelado');
            $cambio=$request->input('cambio');
            $fecha=$request->input('fecha');
            $hora=$request->input('hora');

            $datatoSave=[
                'cliente'=>$cliente,
                'nit'=>$nit,
                'total'=>$total,
                'cancelado'=>$cancelado,
                'cambio'=>$cambio,
                'fecha'=>$fecha,
                'hora'=>$hora,
                'estado'=>1
            ];

        Sale::storeSale(new Request($datatoSave));

        $dataResponse=[
            'message'=>'Venta Guardada Correctamente',
            'status'=>'success',
        ];
    }catch(\Exception $e){
        $dataResponse=[
            'message'=>'$e->getMessage()',
            'status'=>'error',
        ];

    }

        return response()->json($dataResponse);
    }
}
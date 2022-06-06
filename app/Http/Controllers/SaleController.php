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


    public function list()
    {
       try{
           $sales=Sale::where('status',1)->get();
           $dataResponse=[
                'status'=>'success',
                'data'=>$sales,
              ];
         }catch(\Exception $e){
            $dataResponse=[
                'status'=>'error',
                'message'=>$e->getMessage(),
            ];
         }
            return response()->json($dataResponse);
    }

    public function show($sale)
    {
        $dataSale=Sale::find($sale);
        $dataResponse=[
            'status'=>'success',
            'data'=>[
                'cliente'=>$dataSale->cliente,
                'nit'=>$dataSale->nit,
                'total'=>$dataSale->total,
                'cancelado'=>$dataSale->cancelado,
                'cambio'=>$dataSale->cambio,
                'fecha'=>$dataSale->fecha,
                'hora'=>$dataSale->hora,

            ],
        ];
        return response()->json($dataResponse);
    }

    public function delete(Sale $sale)
    {
        try{
            $sale->status=0;
            $sale->save();
            $dataResponse=[
                'status'=>'success',
                'message'=>'Venta Eliminada Correctamente',
            ];
            return response()->json($dataResponse);
        }catch(\Exception $e){
            $dataResponse=[
                'status'=>'error',
                'message'=>'Error al eliminar la venta',
            ];
            return response()->json($dataResponse);
        }
    }

    public function update(Request $request, Sale $sale)
    {
            try{
                $cliente=$request->input('cliente');
                $nit=$request->input('nit');
                $total=$request->input('total');
                $cancelado=$request->input('cancelado');
                $cambio=$request->input('cambio');
                $fecha=$request->input('fecha');
                $hora=$request->input('hora');

                $sale->cliente=$cliente;
                $sale->nit=$nit;
                $sale->total=$total;
                $sale->cancelado=$cancelado;
                $sale->cambio=$cambio;
                $sale->fecha=$fecha;
                $sale->hora=$hora;

                $sale->save();
                $dataResponse=[
                    'status'=>'success',
                    'message'=>'Venta Actualizada Correctamente',
                ];
                return response()->json($dataResponse);
            }catch(\Exception $e){
                $dataResponse=[
                    'status'=>'error',
                    'message'=>'Error al actualizar la venta',
                ];
                return response()->json($dataResponse);
            }
    }
}
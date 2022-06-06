<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Sale_Detail;
use PhpParser\Node\Expr\FuncCall;

class SaleDetailController extends Controller
{
    public function create(Request $request)
    {
        try{
            $cantidad=$request->input('cantidad');
            $precio=$request->input('precio');
            $subtotal=$request->input('subtotal');
            $fecha=$request->input('fecha');
            $hora=$request->input('hora');

            $datatoSave=[
                'cantidad'=>$cantidad,
                'precio'=>$precio,
                'subtotal'=>$subtotal,
                'fecha'=>$fecha,
                'hora'=>$hora,
                'estado'=>1
            ];

            Sale_Detail::storeSale(new Request($datatoSave));
            $dataResponse=[
                'message'=>'Venta Guardada Correctamente',
                'status'=>'success',
            ];
        }catch
        (\Exception $e){
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
            $sales_detail=Sale_Detail::where('status',1)->get();
            $dataResponse=[
                 'status'=>'success',
                 'data'=>$sales_detail,
               ];
          }catch(\Exception $e){
             $dataResponse=[
                 'status'=>'error',
             ];

        }
        return response()->json($dataResponse);
    }

    public function show($sales_detail)
    {
       $datasales_detail=sale_detail::find($sales_detail);
         $dataResponse=[
                'status'=>'success',
                'data'=>[
                    'camtidad'=>$datasales_detail->cantidad,
                    'precio'=>$datasales_detail->precio,
                    'subtotal'=>$datasales_detail->subtotal,
                    'fecha'=>$datasales_detail->fecha,
                    'hora'=>$datasales_detail->hora,
                ],
            ];
            return response()->json($dataResponse);
    }

    public function delete(Sale_Detail $sales_detail)
    {
        try{
            $sales_detail->status=0;
            $sales_detail->save();
            $dataResponse=[
                'message'=>'Venta Eliminada Correctamente',
                'status'=>'success',
            ];
            return response()->json($dataResponse);
        }catch(\Exception $e){
            $dataResponse=[
                'message'=>'Error al elmininar venta',
                'status'=>'error',
            ];
            return response()->json($dataResponse);
        }
    }

    public function update(Request $request, Sale_Detail $sales_detail)
    {
        try{
            $cantidad=$request->input('cantidad');
            $precio=$request->input('precio');
            $subtotal=$request->input('subtotal');
            $fecha=$request->input('fecha');
            $hora=$request->input('hora');

            $sales_detail->cantidad=$cantidad;
            $sales_detail->precio=$precio;
            $sales_detail->subtotal=$subtotal;
            $sales_detail->fecha=$fecha;
            $sales_detail->hora=$hora;
            $sales_detail->save();
            $dataResponse=[
                'message'=>'Venta Actualizada Correctamente',
                'status'=>'success',
            ];
            return response()->json($dataResponse);
        }catch(\Exception $e){
            $dataResponse=[
                'message'=>'Error al actualizar venta',
                'status'=>'error',
            ];
            return response()->json($dataResponse);
        }
    }
}

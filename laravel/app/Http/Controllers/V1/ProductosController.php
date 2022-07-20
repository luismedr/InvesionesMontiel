<?php
 
namespace App\Http\Controllers\V1;
 
use App\Models\Productos;
use App\Http\Controllers\Controller;
 
class ProductosController extends Controller
{
    //ESTE ES MI CASO PROPUESTO IDL1
    public function getProductos()
    {
        $response=new \stdClass();

        $response ->success=true;
        $response->data=Productos::all();

       return response()->json($response,200);
    }
}
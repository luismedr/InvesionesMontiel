<?php
 
namespace App\Http\Controllers\V1;
 
use App\Models\Productos;
use App\Http\Controllers\Controller;
 
class ProductosController extends Controller
{
    public function getProductos()
    {
        $response=new \stdClass();

        $response ->success=true;
        $response->data=Productos::all();

       return response()->json($response,200);
    }
}
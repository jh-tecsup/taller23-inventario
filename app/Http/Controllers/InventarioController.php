<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;

class InventarioController extends Controller
{
    public function index(){
        $lista = Producto::all();
        return view ('inventario/index',compact('lista'));
    }

    public function exportarExcel(){
        return Excel::download(new ProductosExport, 'resporte_inventario.xlsx');
    }
}

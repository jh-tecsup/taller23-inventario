<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class InventarioController extends Controller
{
    public function index(){
        $lista = Producto::all();
        return view ('inventario/index',compact('lista'));
    }
}

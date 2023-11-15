<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductosExport implements FromCollection, WithMapping, WithHeadings
{
    public function headings(): array
    {
        return [
            'Codigo',
            'Nombre',
            'Categoría',
            'Ubicación',
            'Condición',
        ];
    }
    
    public function map($fila):array{
        return [
            $fila->codigo,
            $fila->nombre,
            $fila->categoria->nombre,
            $fila->ubicacion->nombre,
            $fila->condicion
        ];
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Producto::all();
    }
}

@extends('layouts.app')

@section('content')
<div class="row mt-4">
	<h3>Ventas</h3>
	<div class="text-end">
		<a class="btn btn-success" href="#">
            <i class="bi bi-file-earmark-excel-fill"></i> Descargar
        </a>
        <a class="btn btn-primary" href="#">
            <i class="bi bi-plus-circle"></i> Nuevo
        </a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
                <th>Categoría</th>
                <th>Ubicacion</th>
                <th>Condicion</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lista as $fila)
			<tr>
				<td>{{ $fila->codigo }}</td>
                <td>{{ $fila->nombre }}</td>
				<td>{{ $fila->categoria->nombre }}</td>
                <td>{{ $fila->ubicacion->nombre }}</td>
                <td>{{ $fila->condicion }}</td>
				<td>
                    <a href="#" class="btn btn-secondary btn-sm">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
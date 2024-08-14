@extends('layout.main_template')

@section('content')

    <div class="container-md">
        <div class="container text-center">
            <h2>Página de Ventas</h2>
    <br>
    <a href="{{route('sales.create')}}" class="btn btn-primary" role="button">Registrar Ventas</a>
    <br>
    
    <table class="table table-danger table-striped">
        <thead>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <br>
        <tbody>
            @foreach ($sales as $s)
                <tr>
                    <td> {{$s->ClientFunction->nameClient}}</td>
                    <td> {{$s->ProductFunction->nameProduct}}</td>
                    <td> {{$s->sale_date}}</td>
                    <td>
                        <a class="btn btn-outline-success" role="button" href="{{route('sales.show', $s)}}">Mostrar</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary" role="button" href="{{route('sales.edit', $s)}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('sales.destroy', $s)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
@endsection
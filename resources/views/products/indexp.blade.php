@extends('layout.main_template')

@section('content')

    <div class="container-md">

        <div class="container text-center">

            <h1 class="display-5">Tabla de productos</h1>

            <a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Registrar Producto</a>
            <br>

            <table class="table table-primary table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <br>
                <tbody>
                    @foreach ($products as $p)
                        <tr>
                            <td> {{ $p->nameProduct }}</td>
                            <td> {{ $p->stock }}</td>
                            <td> {{ $p->unit_price }}</td>
                            <td> {{ $p->BrandFunction->brand }}</td>
                            <td><img src="/image/products/{{ $p->image }}" height="40px" alt="Dulces.jpeg"></td>
                            <td>
                                <a class="btn btn-outline-success" role="button" href="{{ route('products.show', $p) }}">Mostrar</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" role="button" href="{{ route('products.edit', $p) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', $p) }}" method="POST">
                                    @method('DELETE')
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

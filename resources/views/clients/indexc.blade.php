@extends('layout.main_template')

@section('content')

    <div class="container-md">

        <div class="container text-center">

            <h1 class="display-5">Tabla de Clientes</h1>
    
            <a href="{{ route('clients.create') }}" class="btn btn-primary" role="button">Registrar Cliente</a>
            <br>
            <br>

            <table class="table table-success table-striped">
                <thead>
                    <th scope="col">Nombre</th>

                    <th scope="col">Apellido Paterno</th>

                    <th scope="col">Apellido Materno</th>

                    <th scope="col">Correo</th>

                    <th scope="col">Telefono</th>

                    <th scope="col">Estado</th>

                    <th scope="col">Municipio</th>

                    <th scope="col"></th>

                    <th scope="col"></th>

                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach ($clients as $c)
                        <tr>
                            <td>{{ $c->nameClient }}</td>
                            <td>{{ $c->lastname }}</td>
                            <td>{{ $c->s_lastname }}</td>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->phone }}</td>
                            <td>{{ $c->StateFunction->state }}</td>
                            <td>{{ $c->TownFunction->town }}</td>
                            <td>
                                <a class="btn btn-outline-success" role="button"
                                    href="{{ route('clients.show', $c->id) }}">Mostrar</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" role="button"
                                    href="{{ route('clients.edit', $c->id) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('clients.destroy', $c->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </td>
                </tbody>
            </table>

        </div>

    </div>
@endsection

@extends('layout.main_template')

@section('content')
    <style>
        * {
            box-sizing: border-box
        }

        form {
            width: 30%;
            padding-inline: 30px;
            padding-block: 30px;
            border-radius: 12px;
            margin-block: auto;
            margin-inline: auto;
            background-color: rgb(38, 38, 38);
            color: rgb(0, 220, 220);
        }

        form label {
            width: 100%;
            height: 10px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            display: inline-block;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 8px 12px;
            margin-block-start: 30px;
            border: 2px solid rgb(0, 220, 220);
            border-radius: 5px;
            display: block;
            color: aliceblue;
            background-color: rgb(25, 25, 25);
        }
    </style>

    <div class="container-md">
        <h2>Registrar Cliente</h2>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control" name="nameClient" id="exampleFormControlInput1"
                placeholder="Victor Manuel...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="lastname" id="exampleFormControlInput1"
                placeholder="Velediaz...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="s_lastname" id="exampleFormControlInput1"
                placeholder="Hernandez...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" name="email" id="exampleFormControlInput1"
                placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero de telefono</label>
            <input type="text" class="form-control" name="phone" id="exampleFormControlInput1"
                placeholder="123-456-7890">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estado</label>
            <select class="form-select" name="id_state" aria-label="Default select example">
                <option selected>Seleccionar...</option>
                @foreach ($states as $state => $id)
                    <option value="{{ $id }}">{{ $state }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Municipio</label>
            <select class="form-select" name="id_town" aria-label="Default select example">
                <option selected>Seleccionar...</option>
                @foreach ($towns as $town => $id)
                    <option value="{{ $id }}">{{ $town }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Registrar</button>
    </form>
    </div>
@endsection

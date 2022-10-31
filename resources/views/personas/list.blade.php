<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Personas</h1>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Fecha Nacimiento</th>
            <th>Ciudad</th>
            <th>Genero</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listPersona as $persona)
            <tr>
                <td>{{ $persona->nombres }}</td>
                <td>{{ $persona->apellidos }}</td>
                <td>{{ $persona->edad }}</td>
                <td>{{ $persona->fechaNacimiento }}</td>
                <td>{{ $persona->ciudad }}</td>
                <td>{{ $persona->genero }}</td>
            </tr>
        @endforeach
    </tbody>
    </thead>
</body>
</html>

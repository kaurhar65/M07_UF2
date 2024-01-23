<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Benvingut administrador</h1>
    <h2>Llista de profesores </h2>
    @if ($lista->isEmpty())
    <h3>No hi ha cap professor en la BBDD.</h3>
    <a href="/prof/create">Crear nou usuari professor</a>
    @else
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Email</th>
                <th>Actiu</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $user)
            <tr>
                <td>{{$user['nom']}}</td>
                <td>{{$user['cognoms']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{ $user->actiu == 1 ? 'Sí' : 'No' }}</td>
                <td><button><a href="/prof/edit/{{$user['id']}}" style="text-decoration: none; color:black">Editar</a></button></td>
                <td>
                    <form action="{{ url('prof/' . $user['id'])}}" method="post">
                        @method("delete")
                        @csrf
                        <input type="submit" value="Borrar">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/prof/create">Crear nou usuari professor</a>
    <a href="/signin"> Iniciar sessió </a>
    @endif

</body>

</html>
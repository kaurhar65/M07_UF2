<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Benvingut professor</h1>
    <h2>Llista dels alumnes </h2>
    @if ($listaAlumno -> isEmpty())
    <p>No hi ha cap alunme en la BBDD.</p>
    <a href="/alum/create">Crear nou usuari alumne</a>
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
            @foreach ($listaAlumno as $user)
            <tr>
                <td>{{$user['nom']}}</td>
                <td>{{$user['cognoms']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{ $user->actiu == 1 ? 'Sí' : 'No' }}</td>
                <td><button><a href="/alum/edit/{{$user['id']}}" style="text-decoration: none; color:black">Editar</a></button></td>
                <td>
                <form action="{{ url('alum/' . $user['id'])}}" method="post">
                        @method("delete")
                        @csrf
                        <input type="submit" value="Borrar">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <a href="/signin"> Iniciar sessió usuari </a>

</body>

</html>
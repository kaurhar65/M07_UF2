<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edita l'usuari professor</h1>
    <form action="{{route('prof.update',[$profe->id])}}" method="post">
        @method('put')
        @csrf
        <label for = "id"> Indica el teu id </label>
        <input type="text" name="id" value="{{$profe->id}}">
        <br>
        <label for = "nom"> Indica el teu nom </label>
        <input type="text" name="nom" value="{{$profe->nom}}">
        <br>
        <label for = "cognoms"> Indica el teu cognom </label>
        <input type="text" name="cognoms" value="{{$profe->cognoms}}">
        <br>
        <label for = "email"> Indica el teu email </label>
        <input type="email" name="email" value="{{$profe->email}}">
        <br>
        <label for = "password"> Indica el teu password </label>
        <input type="password" name="password" value="{{$profe->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="professor">Professor</option>
            <option value="estudiant">Estudiant</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $profe->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <a href="/signin"> Iniciar sessió usuari </a>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edita l'usuari estudiant</h2>
    <form action="{{route('alum.update',[$alumno->id])}}" method="post">
        @method('put')
        @csrf
        <label for = "id"> Indica el teu id </label>
        <input type="text" name="id" value="{{$alumno->id}}">
        <br>
        <label for = "nom"> Indica el teu nom </label>
        <input type="text" name="nom" value="{{$alumno->nom}}">
        <br>
        <label for = "cognoms"> Indica el teu cognom </label>
        <input type="text" name="cognoms" value="{{$alumno->cognoms}}">
        <br>
        <label for = "email"> Indica el teu email </label>
        <input type="email" name="email" value="{{$alumno->email}}">
        <br>
        <label for = "password"> Indica el teu password </label>
        <input type="password" name="password" value="{{$alumno->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="professor">Professor</option>
            <option value="estudiant">Estudiant</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $alumno->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <a href="/signin"> Iniciar sessió usuari </a>
    
</body>
</html>

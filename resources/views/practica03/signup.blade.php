<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- El formulari per demanar les dades a l'usuari.
         l'etiqueta action i method s'utilitza per enviar les a dades al fitxer gestionDB a través del POST"
    -->
    <h1> Crea un usuari </h1>
    <form action="gestionBD.php" method="post">
        <label for = "id"> Indica el teu id </label>
        <input type="text" name="id">
        <br>
        <label for = "nom"> Indica el teu nom </label>
        <input type="text" name="nom">
        <br>
        <label for = "cognom"> Indica el teu cognom </label>
        <input type="text" name="cognom">
        <br>
        <label for = "email"> Indica el teu email </label>
        <input type="email" name="email">
        <br>
        <label for = "password"> Indica el teu password </label>
        <input type="password" name="password">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="Professorat">Professor</option>
            <option value="Alumnat">Alumne</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <a href="/signin"> Iniciar sessió usuari </a>
    
</body>
</html>


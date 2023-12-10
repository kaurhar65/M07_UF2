<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <!-- Formulari per iniciar la sessió-->
    <h1> Iniciar sessió de l'usuari </h1>
    <form action="validar.php" method="post">
        <div>
            <label for="email"> Email </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="contrasenya"> Contraseña </label>
            <input type="password" name="contrasenya">
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label for="remember"> Remember</label>
        </div>
        <input type="submit" value="Enviar ">
    </form>
    <!-- En el cas de que no tingui un compte es pot anar a aquest enllaç per crear un -->
    <a href="/signup"> Crear Usuari</a>

</body>

</html>
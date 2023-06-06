<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login con sesion</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="logica/loguear.php" method="POST" class="login-form">
                <h2>LOGIN</h2>
                <input type="text" name="usuario" placeholder="Digite usuario">
                <br><br>
                <input type="password" name="clave" placeholder="Digite clave">
                <br><br>
                <button type="submit">ENTRAR</button>
            </form>
        </div>
    </div>
 
</body>
</html>
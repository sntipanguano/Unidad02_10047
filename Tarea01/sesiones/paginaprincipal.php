<?php
echo "<html>";
echo "<center><body style='background-color: #76b852'>
        <div>
            <center><h2>INICIO DE SESION</h2>
    </div>
</body>
</hmtl>";




session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.php");
}else{
    echo "<h1>BIENVENIDO $usuario </h1>";

    echo "<button><a href='logica/salir.php'>SALIR</a></button>";

}



?>
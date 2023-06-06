<?php
echo "<html>";
echo "<center><body style='background-color: #76b852'>
        <div>
            <center><h2>INICIO DE SESION INCORRECTO</h2>
    </div>
</body>
</hmtl>";


require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario ' and clave = '$clave' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']= $usuario;
    header("location: ../paginaprincipal.php");
}else{
    echo "<h1>DATOS INCORRECTOS</h1>";
    echo "<button><a href='salir.php'>SALIR</a></button>";
}
?>
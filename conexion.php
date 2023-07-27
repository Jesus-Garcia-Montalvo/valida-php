<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$base="valida";

$con = mysqli_connect($servidor,$usuario,$clave, $base);

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if ($_POST) {
    $c = $_POST['cc'];
    $n = $_POST['nom'];
    $e = $_POST['edad'];
    $t = $_POST['tel'];
    $em = $_POST['email'];

    $insertar = mysqli_query($con, "INSERT INTO persona(cedula,nombre,edad,telefono,correo) VALUES ('$c','$n','$e','$t','$em')");

    if ($insertar) {
        echo "<script>
        location.href = 'bd.html';
        </script>";
    } else {
        echo "error";
    }
}
?>






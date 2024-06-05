<?php
$servidor = "localhost";
$usuariodb = "id22240397_galeria";
$passdb = "!1234abcD";
$db = "id22240397_galeria";

$conn = mysqli_connect($servidor,$usuariodb,$passdb,$db);
if(isset($conn)){
    echo "Conexion establecida";
}
mysqli_close($conn);
?>
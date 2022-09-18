<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
// varidar caracteres especiles, espacios...

if( $usuario === ' ' || $pass === ' '){
    // El Fetch responde/recibe en formato json
    // Pues, ese echo lo mandaría en string y no en json
    echo json_encode('error');
} else{
    echo json_encode('Correcto: <br>Usuario:'.$usuario.'<br>Pass:'.$pass);
}
?>
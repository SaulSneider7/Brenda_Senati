<?php
    $claves = array('TIENES', 'QUE SER', 'INVITADO', 'PARA', 'INGRESAR');
    $intentos = count($claves);
    $accesoPermitido = true;

    for ($i = 1; $i <= $intentos; $i++) {
        $input = readline('Ingresa la clave' . $i . ': ');

        if ($input !== $claves[$i - 1]) {
            $accesoPermitido = false;
            break;
        }
    }

    if ($accesoPermitido) {
        echo 'Acceso permitido';
    } else {
        echo 'Acceso denegado';
    }

?>
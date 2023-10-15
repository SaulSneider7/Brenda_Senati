<!-- Realice un Programa que, determina los números de 5 cifras, descomponga por digito y si la 
cantidad es mayor mostrar Error -->
<?php
    $numero = readline("Ingresa un número de 5 cifras: ");

    if (strlen($numero) == 5 && is_numeric($numero)) {
        $digito1 = $numero[0];
        $digito2 = $numero[1];
        $digito3 = $numero[2];
        $digito4 = $numero[3];
        $digito5 = $numero[4];

        echo "Dígitos del número: $digito1 - $digito2 - $digito3 - $digito4 - $digito5";
    } else {
        echo "Error";
    }
?>

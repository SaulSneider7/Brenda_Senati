<!-- Crear un programa que permita, dadas 3 longitudes, decir mediante un mensaje si forman un 
triangulo: EQUILÁTERO, ISÓSCELES o ESCALENO, o en su defecto no forman un 
triángulo. NOTA: Cada lado tiene que ser menos que la suma de los otros dos: -->
<?php
    $lado1 = readline("Ingresa la longitud del primer lado: ");
    $lado2 = readline("Ingresa la longitud del segundo lado: ");
    $lado3 = readline("Ingresa la longitud del tercer lado: ");

    $lado1 = (float)$lado1;
    $lado2 = (float)$lado2;
    $lado3 = (float)$lado3;

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Es un triángulo EQUILÁTERO";
        }
        elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Es un triángulo ISÓSCELES";
        }
        else {
            echo "Es un triángulo ESCALENO";
        }
    } else {
        echo "No forma un triángulo";
    }
?>

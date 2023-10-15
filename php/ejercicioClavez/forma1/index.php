<?php 
    $clave1 = 'TIENES';
    $clave2 = 'QUE SER';
    $clave3 = 'INVITADO';
    $clave4 = 'PARA';
    $clave5 = 'INGRESAR';

    $input = readline('Ingresa la clave1: ');
    if($input == $clave1){
        $input2 = readline('Ingresa la clave2: ');
        if($input2 == $clave2){
            $input3 = readline('Ingresa la clave3: ');
            if($input3 == $clave3){
                $input4 = readline('Ingresa la clave4: ');
                if($input4 == $clave4){
                    $input5 = readline('Ingresa la clave5: ');
                    if($input5 == $clave5){
                        echo 'Acceso permitido';
                    }else{
                        echo 'Acceso denegado';
                    }
                }else{
                    echo 'Acceso denegado';
                }
            }else{
                echo 'Acceso denegado';
            }
        }
    } else {
        echo 'Acceso denegado';
    }

?>
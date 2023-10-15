<?php
    $clave = readline("Ingresa la clave1: ");

    switch ($clave) {
        case 'TIENES':
            $clave = readline("Ingresa la clave2: ");
            switch ($clave) {
                case 'QUE SER':
                    $clave = readline("Ingresa la clave3: ");
                    switch ($clave) {
                        case 'INVITADO':
                            $clave = readline("Ingresa la clave4: ");
                            switch ($clave) {
                                case 'PARA':
                                    $clave = readline("Ingresa la clave5: ");
                                    switch ($clave) {
                                        case 'INGRESAR':
                                            echo 'Acceso permitido';
                                            break;
                                        default:
                                            echo 'Acceso denegado';
                                            break;
                                    }
                                    break;
                                default:
                                    echo 'Acceso denegado';
                                    break;
                            }
                            break;
                        default:
                            echo 'Acceso denegado';
                            break;
                    }
                    break;
                default:
                    echo 'Acceso denegado';
                    break;
            }
            break;
        default:
            echo 'Acceso denegado';
            break;
    }
    
?>
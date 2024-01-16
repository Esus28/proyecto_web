<?php
    // $time=0.05;
    // $costo=4;

    // do{
    //     $costo++;
    //     $inicio=microtime(true);
    //     password_hash("test", PASSWORD_BCRYPT,["cost"=>$costo]);
    //     $fin=microtime(true);
    // }
    // while(($fin - $inicio) < $time);
    //     echo"Costo apropiado encontrado:" .$costo."\n";
    
    $nombre="Jesus";
    $nombre_cifrado=password_hash($nombre, PASSWORD_DEFAULT);
        echo $nombre_cifrado."\n";
    
    $nombre_cifrado=password_hash($nombre, PASSWORD_DEFAULT, array("cost"=>12));

    $hash='$2y$10$H24Jw20hkcO4MsjIceqvXuiaSyey60JiFfjkC/LDnnHjWVmE37jpK';
    if(password_verify('Jesus', $hash)){
        echo"Valido";
    }else{
        echo "Error";
    }
?>
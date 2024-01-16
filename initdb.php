<?php
    //phpinfo();

    //SQLite::open("data.sqlite3", SQLITE3_OPEN_CREATE);

    //$database = new SQLite3('data.sqlite');

    try {
        $conex = new PDO('sqlite:data.sqlite');
        $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $table="CREATE TABLE usuarios (
            id INT AUTO_INCREMENT,
            nombre VARCHAR(80) not null,
            apellidos VARCHAR(100) null,
            genero CHAR(1) null,
            domicilio VARCHAR(100) null,
            usuario VARCHAR(80) null,
            contrasena VARCHAR(100) NULL,
            PRIMARY KEY(id_usuario)
        );";
        $conex->exec($table);
    }catch(PDOException $e){
        die('Error: ' $e->getMessage());
    }
?>    
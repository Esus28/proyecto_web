<?php
    //phpinfo();
    //SQLite3::open("data.sqlite3", SQLITE3_OPEN_CREATE);
    //$database = new SQLite3('data.sqlite');

    try {
        $conex = new PDO('sqlite:data.sqlite3');
        $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$conex->exec("SET CHARACTER SET utf8");
        
    } catch(PDOException $e) {
        die('Error: '. $e->getMessage());
    }

?>
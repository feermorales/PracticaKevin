<?php

    function insertar($liga){

        $host = "host=localhost";
        $port = "port=5432";
        $dbname = "dbname=scraping";
        $user = "user=postgres";
        $password ="password=Usercontra1";

        $bd = pg_connect("$host $port $dbname $user $password");

        $sql = "INSERT INTO noticias VALUES ('".$liga."')";

        return pg_query($bd, $sql);

    }
?>
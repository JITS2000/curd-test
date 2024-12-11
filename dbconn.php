<?php
    define("hostname", "localhost");
    define("username", "root");
    define("password", "");
    define("database", "crud_application");

    $connection = mysqli_connect(hostname, username, password, database);

    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }
?>
<?php

    $host = "127.0.0.1";
    $dbuser = "root";
    $dbname = "final_lab";
    $dbpass = "";


    function getConnection(){
        global $host;
        global $dbuser;
        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpass'], $GLOBALS['final_lab']);
        return $con;
    }

?>
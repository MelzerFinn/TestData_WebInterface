<?php
//used to add a new material or alias to the database

    require("./checkLogin.php");

    //log in to database
    $dbhost = "localhost:3306";
    $dbuser = "web_user";
    $dbpass = "9C8rVueFDDBDAG6EKYrN";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
        http_response_code(500);
    }
    mysqli_select_db($conn, "Belastungstests");

    //SQL-query to add the material/alias to the databases
    $sql = "INSERT INTO `materials` (`ID`, `Alias`, `Type`) VALUES ('".$_POST[id]."', '".$_POST[alias]."', '".$_POST[type]."');";
    echo $sql;
    if(!mysqli_query($conn, $sql)){
        http_response_code(500);
    }
?>
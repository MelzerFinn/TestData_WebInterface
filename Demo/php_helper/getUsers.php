<?php
//fetch all users for the usersettings

    require("./checkLogin.php");

    header('Content-type: text/plain');
    $dbhost = "localhost:3306";
    $dbuser = "finn";
    $dbpass = "__PASSWORT__";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
        http_response_code(500);
    }
    mysqli_select_db($conn, "finnswebDB");
    $result = mysqli_query($conn, "SELECT `username`, `permission-live`, `permission-viewAll`, `permission-viewOwn`, `permission-settingsTool`, `permission-settingsUser` FROM `users`");
    if(!$result) http_response_code(500);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($result);
?>


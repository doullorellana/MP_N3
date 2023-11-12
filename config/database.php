<?php
try {
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "login_db";

    $mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

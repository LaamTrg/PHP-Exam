<?php
function getDbConnection() {
    $mysqli = new mysqli("localhost", "username", "password", "phonebook");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
}
?>
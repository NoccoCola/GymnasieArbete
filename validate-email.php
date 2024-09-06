<?php
$mysqli = require __DIR__ . "/database.php";    //Ansluter till db

$sql = sprintf(
    "SELECT * FROM user
                WHERE email = '%s'",    //Hämtar mail från db
    $mysqli->real_escape_string($_GET["email"])
);

$result = $mysqli->query($sql);
$is_available = $result->num_rows === 0;  //Om rows är noll, finns inte email i db

header("Content-Type: application/json");   //Till json, eftersom det ska valideras i javascript

echo json_encode(["available" => $is_available]);

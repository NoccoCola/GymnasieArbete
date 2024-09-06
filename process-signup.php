<?php

if (empty($_POST["username"])) {
    die("Name is required!");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid Email!");
}
if (strlen($_POST["password"]) < 6) {    //string length för att kolla längd
    die("Password must be at least 6 characters!");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {    //Om lösenordet innehåller minst en bokstav
    die("Password must contain at least one letter!");
}

if (!preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number!");  //Om lösenordet innehåller minst ett nummer
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash) 
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

try {
    $stmt->prepare($sql);
} catch (Exception $e) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param(
    "sss",
    $_POST["username"],
    $_POST["email"],
    $password_hash
);

try {
    $stmt->execute();
    header("Location: signup-success.html");
    exit;
} catch (Exception $e) {
    if ($mysqli->errno === 1062) { //Om email är taget
        die("email already taken");
    } else {
        die($mysqli->error .  " " . $mysqli->errno);
    }
}

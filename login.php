<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";    //Ansluter till databas

    $sql = sprintf(
        "SELECT * FROM user
                    WHERE email = '%s'",    //Kollar om email finns i databas
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();    //Startar session för att komma ihåg id 
            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Login-stylesheet.css">
</head>

<body>

    <div class="Login-container">
        <form class="form-login" method="post" autocomplete="off">
            <h1>Log in</h1>
            <input type="email" placeholder="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

            <input placeholder="password" type="password" name="password" id="password">
            <button>Log In</button>
            <?php if ($is_invalid) : ?>
                <em style="color: red;">Invalid Login</em>
            <?php endif; ?>
            <div class="Signup">Don't Have An Account? <a href="login.html">Sign Up</a></div>
        </form>
    </div>
</body>

</html>
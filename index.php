<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Home-stylesheet.css">
    <script defer src="js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NTI News Agency</title>
</head>

<body>
    <header>
        <h1>The NTI Times</h1>
        <?php if (isset($user)) : ?>
            <p> Hello <?= htmlspecialchars($user["name"]) ?> </p>
            <p> <a href="logout.php">Log Out</a></p>
        <?php endif; ?>
        <nav>
            <a href="#">ABOUT</a>
            <a href="#">INQUIRY</a>
            <a href="#">CONTENT</a>
            <a href="#">NEWS</a>

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
        </nav>
    </header>

    <div class="title">
        <h1 id="typewriter"></h1>
        <nav class="fade">
            <a href="#">SPORTS</a>
            <a href="#">ECONOMY</a>
            <a href="#">RELATIONS</a>
        </nav>
    </div>

    <div class="container">
        <main class="main-article">
            <img src="https://freerangestock.com/sample/130029/smiling-man-with-white-stubble-beard.jpg" alt="smiling-man-article 1">
            <h2>Local Man Strangled By a Crocodile On Steroids</h2>

            <h4>Breaking News:</h4>
            <p>A shocking incident has occurred where a local man was attacked and strangled by a crocodile, which, according to authorities, may have been exposed to steroids. The unusual aggression and size of the reptile are under investigation as wildlife experts work to understand how this could have happened.

                <br><br>
            <h4>Investigative Report: </h4>
            <p>Authorities are looking into a bizarre case where a local resident was fatally strangled by a crocodile suspected of being on steroids. The incident has sparked a wave of concern among locals and environmentalists about illegal wildlife practices that may have led to the animal's heightened aggression.

            <br><br>
            <h4>Community Alert: </h4>
           <p>A community is in shock after a crocodile, believed to be under the influence of steroids, strangled a local man. Officials are urging residents to stay away from nearby water bodies as investigations continue into the origins of the enhanced crocodile and the circumstances surrounding the attack.
            </p>

            <h4>Expert Analysis:</h4>
            <p>Wildlife experts are puzzled after a local man was found strangled by a crocodile, which they believe might have been given steroids. This rare and dangerous situation raises concerns about potential tampering with wildlife and the effects of steroids on animal behavior.</p>
            <a href="#">Learn More</a>
        </main>

        <div class="a">
            <main class="second-article">
                <img src="https://www.shawnachor.com/wp-content/uploads/2016/03/1398201472.jpg" alt="smiling-man-article 1">
                <h2>More People Are Using Notebooks</h2>
                <p>A growing trend reveals that more people are turning to notebooks for their daily tasks, education, and work needs. The shift from desktops to more portable, versatile devices is driven by the increasing demand for mobility and flexibility in both personal and professional environments.</p>
                <a href="#">Learn More</a>
            </main>

            <main class="second-article">
                <img src="https://www.newsoresund.se/wp-content/uploads/2015/12/Tivoli-jul-webb.jpg" alt="smiling-man-article 1">
                <h2>Local Tivoli Shutdown Due to Russian Invasion</h2>
                <p>The local Tivoli, a popular amusement park, has been forced to shut down operations following a sudden Russian invasion. The management cited safety concerns and government directives as the primary reasons for the immediate closure, leaving many in the community shocked and uncertain.</p>
                <a href="#">Learn More</a>
            </main>
        </div>
    </div>

    <section class="smaller-news">
        <img src="https://jpinyu.com/wp-content/uploads/2024/01/israel-palestine-flags.jpeg" alt="">
        <h3>Lorem ipsum dolor sit.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat iusto dolorum aut vitae magnam. Ab.</p>

        <div class="divide">
            <img src="https://jpinyu.com/wp-content/uploads/2024/01/israel-palestine-flags.jpeg" alt="">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum maiores quae quidem dolor quisquam commodi!</h4>

            <img src="https://jpinyu.com/wp-content/uploads/2024/01/israel-palestine-flags.jpeg" alt="">
            <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus amet consectetur ipsa id ex temporibus repellat accusantium minima repudiandae optio.</h4>
        </div>



    </section>


    <section class="sports">


    </section>


</body>

</html>
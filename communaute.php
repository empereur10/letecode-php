<?php
$communaute = [
    [
        "name" => "viminde",
        "images" => "images/communaute/dd.png",
    ],
    [
        "name" => "HTML",
        "images" => "images/communaute/glm.jpg",
    ],
    [
        "name" => "CSS3",
        "images" => "images/communaute/nt.png",
    ],
    [
        "name" => "Flexbox",
        "images" => "images/communaute/dd.png",
    ],
    [
        "name" => "Responsive",
        "images" => "images/communaute/glm.jpg",
    ],
    [
        "name" => "Animation",
        "images" => "images/communaute/nt.png",
    ],
    [
        "name" => "Animation",
        "images" => "images/communaute/nt.png",
    ],
    [
        "name" => "Animation",
        "images" => "images/communaute/nt.png",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/communaute.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Communaute | Letecode</title>
    <meta name="description" content="Letecode">
    <meta property="og:title" content="communaute| Letecode">
    <meta property="og:description" content="Letecode est une Communauté">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://empereur10.github.io/letecode/images/letecode.png">
    <meta property="og:url" content="https://empereur10.github.io/letecode">
</head>

<body>
    <?php include('nav.php'); ?>
    <header class="section">
        <div class="container">
            <h1>Bienvenue sur notre site</h1>
            <p>Nous vous apprenons à changer le monde avec votre créativité</p>
            <a class="btn" href="contact.html">Nous contactet</a>
        </div>
    </header>
    <section class="section appcont">
        <div class="container">

            <div class="bloc-item">
                <h2 class="mar-t-10">
                    Apprendre la programmation
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quisquam ad. Beatae debitis, fugiat
                    enim ut quam hic. Officia ad mollitia quasi cupiditate voluptatibus minus incidunt assumenda illo fugit
                    eveniet.</p>
            </div>
            <div class="bloc-item al-center">
                <img src="images/python.png" class="bloc-item" alt="">
            </div>
        </div>
    </section>
    <section class="">
        <div class="container ">
            <h2 class="mar-b-10">Les membres</h2>
            <div class="listes-membres">
                <?php foreach ($communaute as $commutes) : ?>
                <div class="membres-item">
                    <img class="img_membres" src="<?php echo "{$commutes["images"]}" ?>" alt="images" srcset="">
                    <p><?php echo "{$commutes["name"]}" ?></p>
                </div>
                
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>

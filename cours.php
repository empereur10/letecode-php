<?php
$cours = [
    [
        "name" => "Git et Github",
        "temp" => "5 heures",
        "image" => "images/cours/git.png"
    ],
    [
        "name" => "HTML",
        "temp" => "5 heures",
        "image" => "images/cours/html.png"
    ],
    [
        "name" => "CSS3",
        "temp" => "5 heures",
        "image" => "images/cours/css.png"
    ],
    [
        "name" => "Flexbox",
        "temp" => "5 heures",
        "image" => "images/cours/flex.png"
    ],
    [
        "name" => "Responsive",
        "temp" => "5 heures",
        "image" => "images/cours/responsive.jpg"
    ],
    [
        "name" => "Animation",
        "temp" => "5 heures",
        "image" => "images/cours/animation.jpg"
    ],
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cours.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours | Letecode</title>
    <meta name="description" content="Letecode">
    <meta property="og:title" content="Cours| Letecode">
    <meta property="og:description" content="Letecode est une Communauté">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://empereur10.github.io/letecode/images/letecode.png">
    <meta property="og:url" content="https://empereur10.github.io/letecode">
</head>

<body>
    <?php include('nav.php')?>
    <section>
        <div class="container">
            <h1 class="mar-t-20">Les cours</h1>
            <div class="listes-cours">
   

             
             <?php foreach ($cours as $cours) : ?>
                    <div class="cours-item">
                        <img class="img_cours" src="<?php echo "{$cours["image"]}" ?>" alt="image">
                        <p><?php echo "{$cours["name"]}" ?></p>
                        <p><?php echo "{$cours["temp"]}" ?></p>
                    </div>
                <?php endforeach?>

            </div>
            
           
        </div>


    </section>
    <section class="back-color">
        <div class="container abbonez">
            <div class="with mar-r-50">
                <h2 class="mar-b-10">Abonnez vous à la boite aux lettres</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In placeat fugiat, saepe non fuga quas labore
                    commodi eveniet corrupti quam accusamus esse soluta exercitationem dignissimos enim beatae maxime debitis
                    quibusdam.
                </p>
            </div>
            <div class="with abbonez_droite mar-l-50">
                <a href="mailto:" class="mail mar-b-10">Adresse email</a>
                <a href="" class="btn">s'abonner</a>
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>
    <script src="style.js"></script>
</body>
</html>
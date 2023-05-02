<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/mail/Exception.php';
require_once __DIR__ . '/mail/PHPMailer.php';
require_once __DIR__ . '/mail/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'youremail@gmail.com'; // email
$mail->Password = 'PASSWORD'; // password
$mail->setFrom('system@cksoftwares.com', 'CKSoftwares System'); // From email and name
$mail->addAddress('to@address.com', 'Mr. Brown'); // to email and name
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

if (isset($_POST["submit_btn"])) {


    $to = "recipient@email.com";

    $subject = 'Mail sent from sendmail PHP script';

    $from = $_POST["email"];

    $message = $_POST["msg"];

    $headers = "From: $from";


    if (mail($to, $subject, $message, $headers)) {

        $responseText = 'Mail sent successfully.';

    } else {

        $responseText = 'Unable to send mail. Please try again.';

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Letecode</title>
    <meta name="description" content="Letecode">
    <meta property="og:title" content="Contact| Letecode">
    <meta property="og:description" content="Letecode est une Communauté">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/letecode.png">
    <meta property="og:url" content="https://empereur10.github.io/letecode">

</head>

<body>
    <?php include('nav.php'); ?>
    <section>
        <div class="container">
            <div>
                <h1 class="mar-t-20">Nous contactez</h1>
                <p>Remplissez ce formulaire pour nous laisser un message</p>
                <?php
                if (!empty($responseText)) {
                    echo $responseText;
                }
                ?>      
            </div>
            <form method="post" action="contact.php">
                <div>
                    <div class="form_right">
                        <label for="nom">Nom</label>
                        <input type="text" name="" id="nom">
                    </div>
                    <div>
                        <label for="pays">Pays</label>
                        <select name="" id="pays">
                            <option value="Congo">Congo</option>
                            <option value="Angola">Angola</option>
                            <option value="Mali">Mali</option>
                            <option value="Burkinafaso">Burkinafaso</option>
                            <option value="Zambie">Zambie</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="form_right">
                        <label for="email">Adresse e-mail</label>
                        <input name="email" type="text" id="email" required />
                    </div>
                    <div>
                        <label for="Objectif">Obj</label>
                        <input name="name" type="text" id="name" required />
                    </div>
                </div>
                <div class="message">
                    <label for="message">Message</label>
                    <textarea name="msg" cols="45" rows="5" id="msg" required></textarea>
                </div>
                <div><input class="btn mar-t-20" name="submit_btn" type="submit" id="submit-btn" value="Envoyer" /></div>
            </form>
        </div>
    </section>
    <section class="back-color">
        <div class="container abbonez">
            <div class="abbonez_gauche with mar-r-50">
                <h1>Abonnez vous à la boite aux lettres</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam, aliquam quo eveniet ad,
                    aspernatur odit ipsam, velit libero repellendus architecto nemo. Cum odio blanditiis laudantium accusantium
                    at et dolor? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi vero accusantium exercitationem,
                    rem non nemo rerum velit sit dolorem dolore porro unde incidunt enim ullam repellendus doloribus. Tempora,
                    reiciendis deserunt.
                </p>
            </div>
            <div class="abbonez_droite with mar-l-50">
                <p class="mail" href="mailto:">Adresse email</p>
                <a href="" class="btn ">s'abonner</a>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
    <script src="style.js"></script>
</body>

</html>
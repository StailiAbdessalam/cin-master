<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/crer.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <title>Cine master</title>
</head>

<body>
    <section class="GAUCHE">
        <form action="../../app/controllers/sing.php" class="GAUCHE__Form" method="POST" enctype="multipart/form-data">
            <input type="file" name="P_prophile" class="GAUCHE__input ">
            <input type="text" name="nom" class="GAUCHE__input" placeholder=" nom" required>
            <input type="text" name="prenom" class="GAUCHE__input" placeholder=" prenom " required>
            <input type="email" name="Gmail" class="GAUCHE__input" placeholder="your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$">
            <input type="password" name="password" class="GAUCHE__input" placeholder="your password" required>
            <input type="hidden" name="C_Password" class="GAUCHE__input" placeholder="confirmer your Password" required>
            <input type="submit" name="submit" value="Creer" class="GAUCHE__input GAUCHE__input--sub">
            <a href="./login.php" class="GAUCHE__creer">
                <div>J’ai deja un compte </div>
            </a>
        </form>
    </section>
    <section class="DROITE">
        <img class="DROITE__image" src="../img/Videographer-amico (1).png" alt="">
    </section>
</body>

</html>
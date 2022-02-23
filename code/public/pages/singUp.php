<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/crer.css">
    <title>Cine master</title>
</head>

<body>
    <section class="GAUCHE">
        <form action="../../app/controllers/sing.php" class="GAUCHE__Form" method="POST" enctype="multipart/form-data">
            <i class='bx bxs-image-add'></i>
            <input type="file" name="P_prophile" class="GAUCHE__input GAUCHE__input--p-p ">
            <input type="text" name="nom" class="GAUCHE__input" placeholder=" nom">
            <input type="text" name="prenom" class="GAUCHE__input" placeholder=" prenom ">
            <input type="Gmail" name="Gmail" class="GAUCHE__input" placeholder="your Email">
            <input type="password" name="password" class="GAUCHE__input" placeholder="your password">
            <input type="password" name="C_Password" class="GAUCHE__input" placeholder="confirmer your Password">
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
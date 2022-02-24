<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/dashbord.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>cine master</title>
</head>

<body>

    <header>
        <div class="nav-bar">
            <div class="nav-bar__logo">
                <img class="nav-bar__img" src="../img/OIP-removebg-preview 1.png" alt="">
                <p>ciné<span>Master</span></p>
            </div>
            <div class="nav-bar__profil">
                <img src="<?= "../../app/prophile_img/" . $_SESSION['img'] ?>">
                <p><a><?= $_SESSION["nom"] . " " . $_SESSION["prenom"] ?></a></p>
            </div>
        </div>
        <div class="nav-choix">
            <div class="nav-bar__icon">
                <a href="./index.php">
                    <i class='bx bxs-film' style='color:#ffffff'></i>
                </a>
                <p>Film</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./post.php">
                    <i class='bx bxs-carousel' style='color:#ffffff'></i>
                </a>
                <p>Post</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./admin.php">
                    <i class='bx bx-shield-alt' style='color:#ffffff'></i>
                </a>
                <p>Admin</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./login.php">
                    <i class='bx bx-log-out' style='color:#ffffff'></i>
                </a>
                <p>Quiter</p>
            </div>
        </div>
    </header>
    <div class="form">
        <form action="../../app/controllers/dashbord.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image_url">
            <input type="text" name="Nam" id="" placeholder="name">
            <input type="number" name="vues" id="" placeholder="vieus">
            <input type="date" name="date" id="" placeholder="date">
            <input type="submit" name="submit" id="">
        </form>

    </div>



</body>

</html>
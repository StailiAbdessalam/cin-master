<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <img src="../img/OIP.jfif" alt="">
                <p><a href="./login.php">  </a></p>
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
                    <i class='bx bx-color-fill' style='color:#ffffff'></i>
                </a>
                <p>ADMIN</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./login.php">
                    <i class='bx bx-log-out' style='color:#ffffff'></i>
                </a>
                <a href="./login.php"> Quiter</a>
            </div>
        </div>
    </header>
    <main>
        <form action="../../app/controllers/admin.php" class="admin__hh" method="POST">
            <input type="text" name="Gmail" id="" placeholder="Gmail">
            <input type="password" name="password" id="" placeholder="password">
            <input type="submit" name="submit" id="">
        </form>

    </main>
    <footer class="py-3 mt-2" style="color:#ffffff">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-muted">Film</a></li>
            <li class="nav-item"><a href="./post.php" class="nav-link px-2 text-muted">Post</a></li>
            <li class="nav-item"><a href="./admin.php" class="nav-link px-2 text-muted">Admin</a></li>
            <li class="nav-item"><a href="./login.php" class="nav-link px-2 text-muted">Quitter</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
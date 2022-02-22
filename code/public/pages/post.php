<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/post.css">
    <title>cine master</title>
</head>

<body>
    <?php  require "../../app/controllers/post.php"; ?>

    <header>
        <div class="nav-bar">
            <div class="nav-bar__logo">
                <img class="nav-bar__img" src="../img/OIP-removebg-preview 1.png" alt="">
                <p>ciné<span>Master</span></p>
            </div>
            <div class="nav-bar__profil">
                <img src="../img/OIP.jfif" alt="">
                <p><a href="./login.php"> </a></p>
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


        <div class="post">
            <div class="post__indi">
                <form action="../../app/controllers/post.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="photo">
                    <input type="text" name="title" placeholder="Title" id="">
                    <input type="text" name="description" placeholder="description" id="">
                    <input type="hidden" name="user_id">
                    <select name="categorie" id="">
                        <option value="Film">film</option>
                        <option value="Serie">serie</option>
                    </select>
                    <input type="submit" name="partager" value="partager" id="hh">
                </form>

            </div>

            <?php foreach ($les_posts as $post) : ?>
                <div class="post__post-user">
                    <div class="post__header">
                        <div class="post__nom">
                            <div class="post__dt-pp"></div>
                            <div>
                                <div><?php echo $post['user_id'] ?></div>
                                <div><?= $post['created_at'] ?></div>
                            </div>
                        </div>
                        <i class='bx bx-dots-horizontal-rounded' style='color:#6f1d75'></i>
                    </div>

                    <div class="post__contenu">
                        <img src="../../app/post_user/<?= $post['photo']?>" class="post__pos" alt="">
                    </div>
                    <div class="post__footer">
                        <i class='bx bxs-like' style='color:#6f1d75'></i>
                        <i class='bx bxs-comment-add' style='color:#6f1d75'></i>
                        <i class='bx bxs-share' style='color:#6f1d75'></i>
                    </div>
                </div>
            <?php endforeach; ?>








        </div>

    </main>



</body>

</html>
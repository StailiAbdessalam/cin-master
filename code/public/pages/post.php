<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/post.css">
    <title>cine master</title>
</head>

<body>
    <?php require_once "../../app/controllers/post.php";
    require_once "../../app/controllers/comments.php";
    ?>

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
                <?php $user = $usersMapById[$post["user_id"]]; ?>
                <section class="prent">
                    <div class='flex max-w-xl my-6 bg-white shadow-md rounded-lg overflow-hidden mx-10 w-screen'>
                        <div class='flex items-center w-full'>
                            <div class='w-full'>
                                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">
                                        <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar' src="../../app/prophile_img/<?= $user->P_prophile ?>">
                                    </div>
                                    <div class="flex flex-col mb-2 ml-4 mt-1">
                                        <div class='text-gray-600 text-sm font-semibold'><?= $user->nom . " " . $user->prenom ?></div>
                                        <div class='flex w-full mt-1'>

                                            <div class='text-gray-400 font-thin text-xs'>
                                                • <?= $post['created_at'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-gray-100"></div>
                                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2 '><img class="rounded w-full" src="../../app/post_user/<?= $post['photo'] ?>"></div>
                                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'><?php echo $post['title'] . " : " ?></div>
                                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'><?php echo $post['description'] ?></div>
                                <div class="flex justify-start mb-4 border-t border-gray-100">
                                    <div class="flex w-full mt-1 pt-2 pl-5">
                                        <span class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                            </svg>
                                        </span>
                                        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" />
                                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                                    </div>
                                    <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                                        <span class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                            </svg>
                                        </span>
                                        <span class="transition ease-out duration-300 hover:bg-blue-500 bg-blue-600 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex w-full border-t border-gray-100">
                                    <div class="mt-3 mx-5 flex flex-row">
                                        <div class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Comments:<div class="ml-1 text-gray-400 font-thin text-ms"> 30</div>
                                        </div>
                                        <div class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Views: <div class="ml-1 text-gray-400 font-thin text-ms"> 60k</div>
                                        </div>
                                    </div>
                                    <div class="mt-3 mx-5 w-full flex justify-end">
                                        <div class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Likes: <div class="ml-1 text-gray-400 font-thin text-ms"> 120k</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                                    <img class='w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer' alt='User avatar' src="../../app/prophile_img/<?= $_SESSION['img']?>">
                                    <form action="../../app/controllers/comments.php" method="POST" class="commentss">
                                        <input type="hidden" name="user_id" id="">
                                        <input type="hidden" name="post_id" id="" value="<?= $post["id"]?>">
                                        <input type="text" name="content" required class="w-96 py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Post a comment...">
                                        <div class="comm">voir comment</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tach">
                        <?php foreach ($comments as $commt) : ?>
                            <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg w-full" id="hhh">
                                <div class="relative flex gap-4">
                                    <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
                                    <div class="flex flex-col w-full">
                                        <div class="flex flex-row justify-between">
                                            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">COMMENTOR</p>
                                            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                        <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
                                    </div>
                                </div>
                                <p class="-mt-4 text-gray-500"><?= $commt['content'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>

        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/post.js"></script>
</body>

</html>
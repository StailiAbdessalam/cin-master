<?php
require_once "../../app/models/Database.php";
function array_remove($selections, $arr)
{
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
}

if (isset($_POST['submit'], $_FILES['image_url'])) {
    $imag_name = $_FILES['image_url']['name'];
    $imag_size = $_FILES['image_url']['size'];
    $tmp_name = $_FILES['image_url']['tmp_name'];
    $img_ex = pathinfo($imag_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $allowed_exs = array("jpg", "jpeg", "png");
    if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = '../image_user/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        $_POST['image_url'] = $new_img_name;
        $N_film = new DataName("film");
        $N_film->insert((array_remove(["submit"], $_POST)));
        header("location:../../public/pages/index.php");
    } else {
        echo "you can't upload files of this type ";
    }
}
$film = new DataName('film');
$filmdb = $film->selectAll();

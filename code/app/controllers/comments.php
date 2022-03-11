<?php
require_once "../models/Database.php";
if (!isset($_SESSION)) {
    session_start();
}
 
// $_POST["user_id"] = $_SESSION['id'];
$new_comment = new DataName("comments");
$new_comment->insert($_POST);
// header("Location:../../public/pages/post.php);
$getcomm = new DataName("comments");
$newComment = $getcomm->getcomment();
// $newComment = json_encode($newComment);
$user = ["img" => $_SESSION["img"], "nom" => $_SESSION["nom"], "prenom" => $_SESSION["prenom"]];
$data = ["comment" => $newComment, "user" => $user];
echo json_encode($data);

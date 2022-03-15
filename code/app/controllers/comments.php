<?php
require_once "../models/Database.php";
if (!isset($_SESSION)) {
    session_start();
}
$new_comment = new DataName("comments");
$new_comment->insert($_POST);

$getcomm = new DataName("comments");
$newComment = $getcomm->getcomment();

$user = ["img" => $_SESSION["img"], "nom" => $_SESSION["nom"], "prenom" => $_SESSION["prenom"]];
$data = ["comment" => $newComment, "user" => $user];
echo json_encode($data);

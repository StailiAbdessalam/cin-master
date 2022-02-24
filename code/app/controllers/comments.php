<?php

require_once "../../app/models/Database.php";
$N_comm = new DataName("comments");
if (isset($_POST["content"])) {
    session_start();
    $_POST["user_id"]= $_SESSION["id"];
    $N_comm->insert($_POST);
    header("location:../../public/pages/post.php");
}
$afiich_comment = new DataName("comments");
$comments = $afiich_comment->selectAll();


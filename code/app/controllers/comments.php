<?php 
require_once "../models/Database.php";
 
if(isset($_POST['content'])){
    session_start();
    $_POST["user_id"]=$_SESSION['id'];

    $new_comment = new DataName("comments");
    $new_comment->insert($_POST);
    header("Location:../../public/pages/post.php");
 
}  
 
 
 

<?php

require_once "../../app/models/Database.php";

if (isset($_POST['submit'])) {
    $email = $_POST['Gmail'];
    $Password = $_POST['Password'];
    $correct = false;
    $log = new DataName("user_");
    $user = $log->selectAll();
    foreach ($user as $oo) {
        if ($oo['Gmail'] == $email && $oo['password'] == $Password) {
            session_start();
            $_SESSION['id']=$oo['id'];
            header("location:../../public/pages/index.php");
            $correct = true;
            break;
        }
    }
}
if($correct==false){
    header("location:../../public/pages/login.php");
}

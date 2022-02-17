<?php

require_once "../models/Database.php";
if (isset($_POST['submit'])) {
    $email = $_POST['Gmail'];
    $Password = $_POST['Password'];
}


$log = new DataName("user_");
$user = $log->selectAll();
foreach ($user as $oo) {
    if ($oo['Gmail'] == $email && $oo['password'] == $Password) {
        header("location:../../public/pages/index.php");
    } else {
        header("location:../../public/pages/login.php");
    }
}

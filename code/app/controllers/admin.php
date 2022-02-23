<?php 
require_once "../../app/models/Database.php";

if (isset($_POST['submit'])) {
    $email = $_POST['Gmail'];
    $Password = $_POST['password'];
}

$admi = new DataName("admin");
$admin = $admi->selectADmin();
foreach ($admin as $oo) {
    if ($oo['Gmail'] == $email && $oo['password'] == $Password) {
        header("location:../../public/pages/dashbord.php");
    } else {
        header("location:../../public/pages/admin.php");
    }
}



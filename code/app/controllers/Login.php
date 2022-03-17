<?php
require_once "../../app/models/Database.php";
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['Gmail'];
    $Password = $_POST['Password'];
    $correct = false;
    $log = new DataName("user_");
    $user = $log->selectByEmail($email);
    if ($user && $user["password"] === $_POST["Password"]) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["img"] = $user["P_prophile"];
        $_SESSION["id"] = $user["id"];
        $_SESSION["nom"] = $user["nom"];
        $_SESSION["prenom"] = $user["prenom"];
        header("location:../../public/pages/index.php");
        return;
    }
    header("location:../../public/pages/login.php");
}































// class Login extends DataName
// {
//     protected    $email;
//     protected  $Password;

//     public function checkUser()
//     {
        
//             $this->email = $_POST['Gmail'];
//             $this->Password = $_POST['Password'];
//             // $correct = false;
//             $user = $this->selectByEmail($this->email);
//             if ($user && $user["password"] === $_POST["Password"]) {
//                 // if (!isset($_SESSION)) {
//                 //     session_start();
//                 // }
//                 $_SESSION["img"] = $user["P_prophile"];
//                 $_SESSION["id"] = $user["id"];
//                 $_SESSION["nom"] = $user["nom"];
//                 $_SESSION["prenom"] = $user["prenom"];
//                 header("location:../../public/pages/index.php");
//                 return;
//             }
//             header("location:../../public/pages/login.php");
        
//     }
// }
// if (isset($_POST['submit'])) {
// $ok = new Login("user_");
// $ok->checkUser();
// }
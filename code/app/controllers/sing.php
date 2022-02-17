<?php 
// function array_pick($selections, $arr){
//     $result = array();
//     foreach($selections as $selection){
//         if(!empty($arr[$selection])){
//             $result[$selection] = $arr[$selection];
//         }
//     }
//     return $result;
// }

function array_remove($selections, $arr){
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
}

require_once "../../app/models/Database.php";
if (isset($_POST['submit'])) {
    // $prenom = $_POST['Prenom'];
    // $nom = $_POST['Nom'];
    // $p_prophile = $_POST['P_profil'];
    // $email = $_POST['Gmail'];
    // $Password = $_POST['C_Password'];
    // unset($_POST["submit"]);
    // $N_user->insert(array_pick(["Prenom", "Nom", "P_profil" , "Gmail" ,"C_Password"]));
    $N_user = new DataName("user_");
    $N_user->insert(array_remove(["submit","password"],$_POST));
    header("location:../../public/pages/login.php");
}


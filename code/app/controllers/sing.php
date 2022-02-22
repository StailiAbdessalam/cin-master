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
    $N_user = new DataName("user_");
    $N_user->insert(array_remove(["submit","C_Password"],$_POST));
    header("location:../../public/pages/login.php");
}


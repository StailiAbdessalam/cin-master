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

function array_remove($selections, $arr)
{
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
}

require_once "../../app/models/Database.php";
if (isset($_POST['submit'], $_FILES['P_prophile'])) {

    $imag_name = $_FILES['P_prophile']['name'];
    $imag_size = $_FILES['P_prophile']['size'];
    $tmp_name = $_FILES['P_prophile']['tmp_name'];
    if ($imag_size > 12500000) {
        echo "sorry , your file is too large ";
    } else {
        $img_ex = pathinfo($imag_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = '../prophile_img/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            $_POST['P_prophile'] = $new_img_name;
            $N_film = new DataName("user_");
            $N_film->insert((array_remove(["submit","C_Password"],$_POST)));
            header("location:../../public/pages/login.php");
        } else {
            echo "you can't upload files of this type ";
        }
    }
}

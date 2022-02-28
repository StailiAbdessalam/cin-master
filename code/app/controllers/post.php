<?php
require_once "../../app/models/Database.php";
session_start();

function array_remove($selections, $arr)
{
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
     

}
if (isset($_POST['partager'], $_FILES['photo'])) {
    $imag_name = $_FILES['photo']['name'];
    $imag_size = $_FILES['photo']['size'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    if ($imag_size > 12500000) {
        echo "sorry , your file is too large ";
    } else {
        $img_ex = pathinfo($imag_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");
        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = '../post_user/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            $_POST['photo'] = $new_img_name;
            $_POST['user_id'] = $_SESSION['id'];
            $n_post = new DataName('posts');
            $n_post->insert(array_remove(["partager"], $_POST));
            header("location:../../public/pages/post.php");
        } else {
            echo "you can't upload files of this type ";
        }
    } 
       

}
      
    
    
    

$newpost = new DataName('posts');
$les_posts = $newpost->selectAll();
if(count($les_posts) > 0){

  


$userIds = [];
$postIds = [];
$usersData = new DataName('user_');
$commentsData = new DataName('comments');
foreach ($les_posts as $post) {
    $postIds[$post["id"]] = true;
    $userIds[$post["user_id"]] = true;
}
  

  
   

$comments = $commentsData->getByColumnValues("post_id", array_keys($postIds));
$commentsListByPostId = [];
foreach ($comments as $comment) {
    $postId = $comment->post_id;
    $userId = $comment->user_id;
    $userIds[$userId] = true;
    if (!isset($commentsListByPostId[$postId])) {
        $commentsListByPostId[$postId] = [];
    }
    $commentsListByPostId[$postId][] = $comment;
}
 

 
    



  


$users = $usersData->getByIds(array_keys($userIds));
$usersMapById = [];
foreach ($users as $user) {
    $usersMapById[$user->id] = $user;
}
};



// $userIds = [];
// $usersData = new DataName('user_');
// foreach ($les_posts as $post) {
//     $userIds[$post["user_id"]] = true;
// } 

// $users = $usersData->getByIds(array_keys($userIds));
// $usersMapById = [];
// foreach ($users as $user) {
//     $usersMapById[$user->id] = $user;
// }





// $delet = new DataName("posts");
// $delet->delette($_SESSION["iid"]);

<?php
if(isset($_SESSION)){

session_destroy();
}

header("Location: ../../public/pages/login.php");
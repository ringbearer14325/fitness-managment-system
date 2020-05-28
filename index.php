<?php 
require_once('load.php');

// handle login
if($_SESSION['REQUEST_METHOD'] == "POST") {
    $login_status = $login->verify_login($_POST);
}

// verify session
if ( $login->verify_session() ) {
    $user = $login->user;

    include('home.php');
} else {
    include('login.php');
}


?>

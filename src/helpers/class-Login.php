<?php 

class Login
{
    public $user;
    public function _construct() {
        global $users;

        session_start();

        $this->users = $users;
    }

    public function users_exists() {



    }


    public function verify_session() {

    }





}

?>
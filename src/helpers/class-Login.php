<?php 

class Login
{
    public $user;

    public function __construct() {
        global $users;

        session_start();

        $this->users = $users;
    }

    public function verify_login($post) {
        if ( ! isset($post['$username']) || ! isset($post['$password']) )  {
            return false;
        }

        // check if user exists
        $user = $this->user_exists( $post['username'] );
        
        if ( false !== $user ) {
            if ( password_verify( $post['password'], $user->password ) ) {
                $_SESSION['username'] = $user->username;
            }
        }
    }    
    
    public function verify_session() {
     $username = $_SESSION['username'];
     $user = $this->in_array_r($username, $this->users);
     
     if ( false != $user ) {
         $this->user = $user;

         return true;
     }
     
     return false;
    }
    

    private function in_array_r() {



    }
    
    public function users_exists() {




    }



}

?>
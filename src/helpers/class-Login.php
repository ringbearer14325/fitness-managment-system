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
        $user = $this->in_array_r($post['username'], $this->users);
        
        if ( false !== $user ) {
            if ( $post['username'] == $user['password'] ) {
                $_SESSION['username'] = $user['username'];
                
                return true;
            }
        }
        return false;
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
    

    private function in_array_r($needle, $haystack) {
        foreach($haystack as $item) {
            if (in_array($needle, $item) ) {
                return $item;
            }
        }

        return false; 

    }
    
}

$Login = new Login;

?>
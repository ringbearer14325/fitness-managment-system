<?php 
require_once('config.php');
require_once('classes/class-db.php');

// create table
$db->query("CREATE TABLE IF NOT EXISTS users (
    ID INT(6), UNSIGNED AUTO_INCREMENT PRIMARY_KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(30)
)"); 

$tables = $db->query("DESCRIBE users");
?>
<pre><?php print_r($tables); ?></pre>

<?php 
require_once('config.php');
require_once('classes/class-db.php');

// create table
$db->query("CREATE TABLE IF NOT EXISTS users (
    ID INT(6), UNSIGNED AUTO_INCREMENT PRIMARY_KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(30) NOT NULL,
)"); 

$tables = $db->query("DESCRIBE users");
?>
<pre><?php print_r($tables); ?></pre>

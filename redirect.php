<?php
 // Let's redirect certain IP addresses to a "Page Not Found"
if($_SERVER['REMOTE_ADDR']=="192.168.111.4"&&ISSET($_GET['auto'])){
 header('Location: chambre.php?id=1');
 die();
}
?>
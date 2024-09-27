<?php  
session_start(); 
session_unset(); 
session_destroy(); // Destroy the session on logout
header('Location: index.php'); 
exit();
?> 

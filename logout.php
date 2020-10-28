<?php

//Logs the user out (destroys the session).
session_start();
session_destroy();
header('Location: index.php');	

?>

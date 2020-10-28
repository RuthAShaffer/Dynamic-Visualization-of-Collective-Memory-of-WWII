<?php
// Login new user

session_start();
session_destroy(); // If already logged in and has a session. Login new user
session_start();

//Filtering the input
$username = htmlspecialchars($_POST['username']);
if( !preg_match('/^[\w_\-]+$/', $username) ){
        echo "Invalid username";
        exit;
}
$pwd_guess = htmlspecialchars($_POST['password']);
if( !preg_match('/^[\w_\-]+$/', $pwd_guess) ){
        echo "Invalid password";
        exit;
}
 
// Checks that the registered and input passwords match
// Modify with username/password
if ($username == 'username' & $pwd_guess == 'pw'){
		
		//Creates a session user ID.
		$_SESSION['user_id'] = 'CollectiveMemory';

		header ('Location: specificModulePageLargeGrain.php');
	
} else {
		
        echo "username or password is incorrect.";

}  
?>

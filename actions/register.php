<?php
include "../classes/User.php";

// Instansiate the class or Create an object
$user = new User;

// Call the method store
$user->store($_POST);
?>
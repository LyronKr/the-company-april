<?php
include "../classes/User.php";

// Instansiate the class or Create an object
$user = new User;

// Call the method update
$user->update($_POST, $_FILES);
?>
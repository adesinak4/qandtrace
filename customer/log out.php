<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: log%20in.php');
?>
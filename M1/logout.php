<?php
session_unset();
session_destroy();
session_start(); // Start a new session to store the message
$_SESSION['logout_message'] = "You have successfully logged out.";

header("Location: login.php");
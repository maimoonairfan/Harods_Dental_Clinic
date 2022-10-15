<?php
session_start();
session_destroy();
unset($_SESSION['pat_name']);	
header('location: index.php');
//echo 'You have been logged out. <a href="index.php">Go back</a>';
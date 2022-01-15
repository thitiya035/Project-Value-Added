<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: http://localhost/Project_web/index.php');
	exit(0);
?>
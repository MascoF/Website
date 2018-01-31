<?php

session_start();
if(!(isset($_SESSION['username'])))
{
    header("Location: sell.php");
}

session_destroy()
?>
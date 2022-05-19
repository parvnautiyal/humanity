<?php
session_start();
if( isset(  $_POST['sub']  )  )
{
session_destroy();
header('location:main 1.php');
}
?>
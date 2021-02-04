<?php

session_start();
if (!isset($_SESSION["teacher_name"])) {
    header("location: ../"); 
    exit();
}

?>
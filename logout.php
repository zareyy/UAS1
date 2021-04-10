<?php
session_start();
session_destroy();
// header("location:login.php?pesan=logout");
header("Location: index.php");

?>

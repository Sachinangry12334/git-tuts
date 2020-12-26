<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('you are succesfully logout');window.location='../index.php';</script>";
?>

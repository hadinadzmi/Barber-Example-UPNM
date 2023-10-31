<?php
session_start();
unset($_SESSION["matrixNo"]);
unset($_SESSION["password1"]);
header("Location:../Customer/login.html");
?>
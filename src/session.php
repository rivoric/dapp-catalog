<?php
session_start();
if (!$_SESSION['uguid']) {
    header('location: login.php', true, 303);
    exit();
}
?>
<meta charset="utf-8">

<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit();
?>
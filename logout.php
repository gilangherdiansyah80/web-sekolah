<?php
session_start();
session_destroy();
header("Location: /web-sekolah/src/pages/login.php");
exit();
?>

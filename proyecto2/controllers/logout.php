/* =========================================================
   Archivo: logout.php
   Descripción:
   Este archivo destruye la sesión activa del usuario
   y redirige nuevamente al login.
========================================================= */
<?php
session_start();
session_destroy();
header("Location: ../views/login.php");
?>
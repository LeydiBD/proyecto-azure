<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Destruir la sesión
session_destroy();

// Redirigir al login
header("Location: login.php");
exit();
?>
<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-start/13_sessions.php');


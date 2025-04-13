<?php
session_start();
include 'header.html';

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "<h2>Добро пожаловать, {$_SESSION['username']}!</h2>";
    echo '<p><a href="exit.php">Выйти</a></p>';
} else {
    include 'header.html';
}

echo 'I\'m alive!';
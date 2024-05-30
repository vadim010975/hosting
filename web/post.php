<?php
declare(strict_types=1);

if (empty($_POST['username']) || trim($_POST['username']) === '') {
    header('Location: ./index.php');
}

$username = trim($_POST['username']);

session_start();

$_SESSION['username'] = $username;

header('Location: ./index.php');
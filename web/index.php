<?php
declare(strict_types = 1);

session_start();

include('./info.php');

if (!empty($_SESSION['username'])) {
    echo 'Hello, ' . $_SESSION['username'] . '!';
    echo '<br /><a href="./exit.php">exit</a>';
} else {
    include('./form.php');
}


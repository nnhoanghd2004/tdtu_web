<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo 'username: '.$username."<br>";
echo 'password: '.$password."<br><br>";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "caphenhe") {
        $_SESSION['dalogin'] = 1;
    } else unset($_SESSION['dalogin']);
}

if (isset($_POST['rememberme']) && $_POST['rememberme'] == 'on') {
    setcookie("username", $username, time() + 3600 * 24 * 7);
    setcookie("password", base64_encode($password), time() + 3600 * 24 * 7);
} else {
    setcookie("username", "", -1);
    setcookie("password", "", -1);
}

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    echo "Cookie username: " . $_COOKIE['username'] . "<br>";
    echo "Cookie password: " . base64_decode($_COOKIE['password']) . "<br>";
} else {
    echo "Cookie không tồn tại";
}
?>

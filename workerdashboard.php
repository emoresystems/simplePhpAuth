<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Worker Dashboard</title>
</head>

<body>
    <h2>Welcome, worker</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>

</html>
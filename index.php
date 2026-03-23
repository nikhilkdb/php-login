<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="login.php">
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
    <br><br>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</form>



<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Invalid login</p>";
}
?>
</body>
</html>
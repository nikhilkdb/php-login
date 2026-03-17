<!DOCTYPE html>
<html>
<body>
<h2>Login</h2>

<form method="POST" action="login.php">
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="register.php">Register here</a></p>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Invalid login</p>";
}
?>
</body>
</html>
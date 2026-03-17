<!DOCTYPE html>
<html>
<body>
<h2>Register</h2>

<form method="POST" action="register.php">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require 'db.php';

    // Hash the password
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed);
        $stmt->execute();

        echo "<p style='color:green;'>Registration successful! <a href='index.php'>Login here</a></p>";
    } catch (Exception $e) {
        echo "<p style='color:red;'>User already exists</p>";
    }
}
?>
</body>
</html>
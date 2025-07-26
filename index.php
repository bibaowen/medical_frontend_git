<?php
// index.php — Doctor Registration Form
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Doctor</title>
</head>
<body>
    <h2>Doctor Registration</h2>
    <form method="POST" action="register_submit.php">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label for="specialty_slug">Specialty Slug:</label><br>
        <input type="text" name="specialty_slug" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

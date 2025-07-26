<?php
include "db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$specialty_slug = $_POST['specialty_slug'] ?? '';

if (!$name || !$email || !$password || !$specialty_slug) {
    die("❌ All fields are required.");
}

$password_hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO doctors (name, email, password_hash, specialty_slug) VALUES ($1, $2, $3, $4) RETURNING id";
$result = pg_query_params($conn, $sql, [$name, $email, $password_hash, $specialty_slug]);

if (!$result) {
    echo "❌ Error: " . pg_last_error($conn);
} else {
    $row = pg_fetch_assoc($result);
    echo "✅ Doctor registered successfully! ID: " . $row['id'];
}

pg_close($conn);
?>

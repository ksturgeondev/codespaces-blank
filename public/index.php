<?php

$conn = new mysqli("mariadb", "student", "student", "student_db");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "PHP is working and connected to MariaDB!";
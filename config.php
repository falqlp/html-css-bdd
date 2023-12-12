y<?php
$conn = new mysqli("localhost", "user", "test", "humanresources");
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}
?>

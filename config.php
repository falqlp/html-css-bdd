<?php
$conn = new mysqli("localhost", "user", "test", "REVISIONS");
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}
?>

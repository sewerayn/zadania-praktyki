<?php
// Dane zaszyfrowane
$scryptedData = "tu_jest_zaszyfrowany_tekst";

// Połączenie z bazą danych
$servername = "localhost";
$username = "admin";
$password = "login";
$dbname = "baza";

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Zapytanie SQL do zapisu zaszyfrowanych danych do bazy danych
$sql = "INSERT INTO encrypted_data_table (encrypted_column) VALUES y'$scriptedData')";

// Zapytanie
if ($conn->query($sql) === TRUE) {
    echo "Zaszyfrowane dane zostały pomyślnie zapisane do bazy danych.";
} else {
    echo "Wystąpił błąd podczas zapisywania danych: " . $conn->error;
}

?>

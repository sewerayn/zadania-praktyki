<?php
$conn = new mysqli("127.0.0.1","admin","test","baza");

if ($conn->connect_error) {
    die("Błąd połączenia bazy: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $conn->real_escape_string($_POST["login"]);
    $pass = $conn->real_escape_string($_POST["password"]);


    $query = "SELECT * FROM users WHERE login='$login' AND password='$pass'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "Zalogowano";
    } else {
        echo "Błąd logowania";
    }

    $conn->close();
}
?>

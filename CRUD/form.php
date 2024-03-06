<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj użytkownika</title>
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

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mt-5">Dodaj użytkownika</h2>
            <form action="add_user.php" method="post">
                <div class="form-group">
                    <label for="name">Imię:</label>
                    <input type="text" id="name" name="name" pattern="[A-Za-z]+" title="Proszę wprowadzić tylko litery" class="form-control">
                </div>
                <div class="form-group">
                    <label for="surname">Nazwisko:</label>
                    <input type="text" id="surname" name="surname" pattern="[A-Za-z]+" title="Proszę wprowadzić tylko litery"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <button type="submit"  class="link"> Dodaj użytkownika</button>

                <a href="/crud/table.php" class="link"> Powrót</a>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

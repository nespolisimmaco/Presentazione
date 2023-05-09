<?php
// $number_1 = $_GET['user-input'];
// $number_2 = $_GET['user-input'];

if (isset($_GET['user-input'])) {
    var_dump($_GET['user-input']);
    // ----------------
    // Restituisce il valore di un numero assoluto, cioè senza segno
    // echo abs($number_1);

    // ----------------
    // Arrotonda il numero al numero intero più vicino,
    // ed è possibile impostare un parametro per determinare quante cifre vogliamo dopo la virgola
    // echo round($number_1, 2);

    // ----------------
    // Arrotonda un numero all'intero successivo più grande
    // echo ceil($number_1); 

    // ----------------
    // Arrotonda un numero all'intero precedente più piccolo
    // echo floor($number_1);

    // ----------------
    // Radice quadrata
    // echo sqrt($number_1);

    // ----------------
    // Calcola la potenza di un numero, number_1 è la base e number_2 è l'esponente
    // echo pow($number_1, $number_2);

    // ----------------
    // Genera un numero casuale tra un numero massimo e minimo specificati
    // echo rand($number_1, $number_2);

    // ----------------
    // Restituisce il numero più piccolo tra quelli scelti dall'utente
    // echo min($number_1, $number_2);

    // ----------------
    // Restituisce il numero più grande tra quelli scelti dall'utente
    // echo max($number_1, $number_2);

    // ----------------
    // Restituisce il resto della divisione tra due numeri
    // echo fmod($number_1, $number_2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentazione</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <!-- Container -->
        <div class="container">
            <!-- Card -->
            <!-- Con 1 input -->
            <div class="card" style="margin: 20px 0;" v-for="(card, index) in functions">
                <div class="card-body">
                    <h5 class="card-title">{{card.name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input type="text" id="user-input[index]" name="user-input">
                        <button class="btn btn-primary" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">{{card.description}}</p>
                    <a :href="card.link" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Container -->

    </div>
    <!-- Javascript -->
    <script src="js/store.js"></script>
</body>

</html>
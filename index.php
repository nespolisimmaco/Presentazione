<?php
$number_1 = $_GET['user-input-1'];
$number_2 = $_GET['user-input-2'];
$number_3 = $_GET['user-input-3'];
$number_4 = $_GET['user-input-4'];
$number_5 = $_GET['user-input-5'];
$number_6 = $_GET['user-input-6'];
$number_7 = $_GET['user-input-7'];
$number_8 = $_GET['user-input-8'];
$number_9 = $_GET['user-input-9'];
$number_10 = $_GET['user-input-10'];
$number_11 = $_GET['user-input-11'];
$number_12 = $_GET['user-input-12'];
$number_13 = $_GET['user-input-13'];
$number_14 = $_GET['user-input-14'];
$number_15 = $_GET['user-input-15'];
$number_16 = $_GET['user-input-16'];


if (isset($_GET['user-input-1'])) {
    // ----------------
    // Restituisce il valore di un numero assoluto, cioè senza segno
    echo abs($number_1);
}

if (isset($_GET['user-input-2']) || ($_GET['user-input-3'])) {
    // ----------------
    // Arrotonda il numero al numero intero più vicino,
    // ed è possibile impostare un parametro per determinare quante cifre vogliamo dopo la virgola
    echo round($number_2, $number_3);
}

if (isset($_GET['user-input-4'])) {
    // ----------------
    // Arrotonda un numero all'intero successivo più grande
    echo ceil($number_4);
}

if (isset($_GET['user-input-5'])) {
    // ----------------
    // Arrotonda un numero all'intero precedente più piccolo
    echo floor($number_5);
}

if (isset($_GET['user-input-6'])) {
    // ----------------
    // Radice quadrata
    echo sqrt($number_6);
}

if (isset($_GET['user-input-7']) || ($_GET['user-input-8'])) {
    // ----------------
    // Calcola la potenza di un numero, number_1 è la base e number_2 è l'esponente
    echo pow($number_7, $number_8);
}

if (isset($_GET['user-input-9']) || ($_GET['user-input-10'])) {
    // ----------------
    // Genera un numero casuale tra un numero massimo e minimo specificati
    echo rand($number_9, $number_10);
}

if (isset($_GET['user-input-11']) || ($_GET['user-input-12'])) {
    // ----------------
    // Restituisce il numero più piccolo tra quelli scelti dall'utente
    echo min($number_11, $number_12);
}

if (isset($_GET['user-input-13']) || ($_GET['user-input-14'])) {
    // ----------------
    // Restituisce il numero più grande tra quelli scelti dall'utente
    echo max($number_13, $number_14);
}

if (isset($_GET['user-input-15']) || ($_GET['user-input-16'])) {
    // ----------------
    // Restituisce il resto della divisione tra due numeri
    echo fmod($number_15, $number_16);
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
            <h1>Math functions</h1>
            <!-- Card 1 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">abs($numero)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-1" name="user-input-1">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text"></p>
                    <a href="https://www.w3schools.com/php/func_math_abs.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 2 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">round($numero [, $precisione])</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-2" name="user-input-2">
                        <input class="mx-2" type="text" id="user-input-3" name="user-input-3">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione round() arrotonda un numero al numero intero più vicino. È possibile specificare una precisione opzionale per arrotondare il numero a un numero specifico di decimali.</p>
                    <a href="https://www.w3schools.com/php/func_math_round.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 3 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">ceil($numero)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-4" name="user-input-4">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione ceil() arrotonda un numero all'intero successivo più grande o uguale.</p>
                    <a href="https://www.w3schools.com/php/func_math_ceil.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 4 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">floor($numero)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-5" name="user-input-5">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione floor() arrotonda un numero all'intero precedente più piccolo o uguale.</p>
                    <a href="https://www.w3schools.com/php/func_math_floor.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 5 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">sqrt($numero)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-6" name="user-input-6">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione sqrt() calcola la radice quadrata di un numero.</p>
                    <a href="https://www.w3schools.com/php/func_math_sqrt.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 6 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">pow($base, $esponente)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-7" name="user-input-7">
                        <input class="mx-2" type="text" id="user-input-8" name="user-input-8">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione pow() calcola una potenza di un numero.</p>
                    <a href="https://www.w3schools.com/php/func_math_pow.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 7 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">rand([$minimo, $massimo])</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-9" name="user-input-9">
                        <input class="mx-2" type="text" id="user-input-10" name="user-input-10">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione rand() genera un numero casuale compreso tra il valore minimo e il valore massimo specificati.</p>
                    <a href="https://www.w3schools.com/php/func_math_rand.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 8 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">min($numero1, $numero2)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-11" name="user-input-11">
                        <input class="mx-2" type="text" id="user-input-12" name="user-input-12">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione min() restituisce il valore minimo tra un insieme di numeri.</p>
                    <a href="https://www.w3schools.com/php/func_math_min.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 9 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">max($numero1, $numero2)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-13" name="user-input-13">
                        <input class="mx-2" type="text" id="user-input-14" name="user-input-14">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione max() restituisce il valore massimo tra un insieme di numeri.</p>
                    <a href="https://www.w3schools.com/php/func_math_max.asp" class="card-link">Link alla funzione su W3Schools</a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card 10 -->
            <div class="card" style="margin: 20px 0;">
                <div class="card-body">
                    <h5 class="card-title">fmod($numero1, $numero2)</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esempio generico di funzione</h6>
                    <form action="index.php" method="GET">
                        <label for="user-input">Inserisci numero</label>
                        <input class="mx-2" type="text" id="user-input-15" name="user-input-15">
                        <input class="mx-2" type="text" id="user-input-16" name="user-input-16">
                        <button class="btn btn-primary mx-2" type="submit">Invia</button>
                    </form>
                    <!-- RISULTATO -->
                    <p class="card-text">La funzione fmod() restituisce il resto della divisione tra due numeri.</p>
                    <a href="https://www.w3schools.com/php/func_math_fmod.asp" class="card-link">Link alla funzione su W3Schools</a>
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
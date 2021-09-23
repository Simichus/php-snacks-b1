<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

// if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
//     echo 'Accesso Consentito';
// } else {
//     echo 'Accesso Negato';
// }
$errors = [];
$error_count = 0;

if (empty($name)) {
    $errors[] = 'Nome inserito non corretto';
    $error_count++;
};

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email inserita non valida';
    $error_count++;
}

if (!is_numeric($age)) {
    $errors[] = 'L\'età inserita non è un numero';
    $error_count++;
}

if ($error_count == 0) {
    echo 'Accesso Consentito';
} else {
    if ($error_count == 1) echo "<h4>È stato trovato $error_count errore:</h4>";
    else echo "<h4>Sono stati trovati $error_count errori:</h4>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}

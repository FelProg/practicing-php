<?php

/**
 * Debe de tener:
 * 1. Una función
 * 2. Validar un e-mail con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar el resultado
 */

function validar($email)
{
    return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ? "Valido" : "No valido";
}


echo isset($_GET['email'])
    ? "<h1>" . validar($_GET['email']) . "</h1>"
    : "<h1>Introduce un email por get";



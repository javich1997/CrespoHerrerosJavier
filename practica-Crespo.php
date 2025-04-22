<?php
/**
 * Script de ejemplo para práctica con PHPDoc.
 *
 * Este script contiene dos funciones: una para sumar números y otra para generar saludos personalizados.
 *
 * @author Javier Crespo
 * @version 1.0
 */

/**
 * Suma dos números enteros y devuelve el resultado.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int La suma de los dos números.
 *
 * 
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Genera un mensaje de saludo personalizado.
 *
 * @param string $nombre El nombre de la persona a saludar.
 * @param string $apellido El primer apellido de la persona a saludar.
 * @param string $idioma El idioma en el que se quiere el saludo ('es', 'en', 'fr').
 * @var string $nombreCompleto El nombre completo generado a partir de la concatenación del nombre y el apellido.
 * @return string El saludo personalizado.
 */
function saludar($nombre, $apellido, $idioma = 'es') {
    $nombreCompleto = "$nombre $apellido";
    switch ($idioma) {
        case 'en':
            return "Hello, $nombreCompleto!";
        case 'fr':
            return "Bonjour, $nombreCompleto!";
        default:
            return "¡Hola, $nombreCompleto!";
    }
}

// Ejemplos de uso
echo sumar(5, 10) . "\n";
echo saludar("Javier","Crespo", "es") . "\n";
?>


<?php
/**
 * Archivo de Fco Javier Toucedo Lopez para phpDocumentor.
 *
 * Este archivo contiene dos funciones de ejemplo para demostrar cómo
 * documentar usando phpDocumentor.
 *
 * @package PracticaPhpDocumentor
 * @version 1.0.0
 * @author Fco Javier Toucedo Lopez
 */

/**
 * Suma dos números.
 *
 * Esta función toma dos números como entrada y devuelve su suma.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int La suma de los dos números.
 * @access public
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Calcula el factorial de un número.
 *
 * Esta función toma un número entero positivo como entrada y devuelve su factorial.
 *
 * @param int $n El número del cual se quiere calcular el factorial. Debe ser un entero positivo.
 * @return int El factorial del número dado.
 * @throws InvalidArgumentException Si el número proporcionado es negativo.
 * @access public
 */
function factorial($n) {
    if ($n < 0) {
        throw new InvalidArgumentException("El número debe ser positivo.");
    }
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

/**
 * Función interna para desarrolladores.
 *
 * Esta función es solo para fines internos y no está destinada a ser utilizada
 * por los usuarios finales. Está documentada para que los desarrolladores
 * puedan entender su propósito y uso.
 *
 * @internal
 * @return void
 */
function funcionInterna() {
    // Código interno solo para desarrolladores.
}

?>
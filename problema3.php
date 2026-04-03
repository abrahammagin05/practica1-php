<?php
// Ejemplo de Orden de Precedencia

// Primero se evalúa la multiplicación (3 * 4), y luego se suma
// el resultado a 2 (2 + 12), lo que da como resultado $resultado = 14.
$resultado = 2 + 3 * 4;
echo "Sin paréntesis: 2 + 3 * 4 = " . $resultado . "\n";

// Con paréntesis: primero se evalúa (2 + 3) = 5, luego 5 * 4 = 20
$resultado = (2 + 3) * 4;
echo "Con paréntesis: (2 + 3) * 4 = " . $resultado . "\n";
?>

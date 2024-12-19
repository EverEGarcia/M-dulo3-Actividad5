<?php
// Función Bubble Sort en orden descendente
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Lista de ejemplo
$arr = [4, 3, 1, -5, 2, 2, -8, 0];

// Mostrar lista original
echo "Lista original:\n";
print_r($arr);

// Ordenar y mostrar la lista después
$sortedArr = bubbleSort($arr);
echo "Lista ordenada (Descendente):\n";
print_r($sortedArr);
?>

<?php
// Función Merge Sort
function mergeSort($arr) {
    if (count($arr) < 2) {
        return $arr;
    }
    
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    return merge(mergeSort($left), mergeSort($right));
}

// Función para combinar dos arreglos
function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Lista de palabras
$words = ["banana", "apple", "grape", "orange", "pear"];

// Mostrar lista original
echo "Lista original:\n";
print_r($words);

// Ordenar y mostrar la lista después
$sortedWords = mergeSort($words);
echo "Lista ordenada alfabéticamente:\n";
print_r($sortedWords);
?>

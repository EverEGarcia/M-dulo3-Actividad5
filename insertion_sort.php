<?php
// Función Insertion Sort
function insertionSort($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Lista de nombres
$names = ["John", "Alice", "Zoe", "Bob", "Charlie"];

// Mostrar lista original
echo "Lista original:\n";
print_r($names);

// Ordenar y mostrar la lista después
$sortedNames = insertionSort($names);
echo "Lista ordenada alfabéticamente:\n";
print_r($sortedNames);
?>

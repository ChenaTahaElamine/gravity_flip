<?php


function gravity_flip($columns) {
    $n = count($columns);
    // Outer loop for each sorting pass
    for ($i = 0; $i < $n - 1; $i++) {
        // Inner loop to compare adjacent elements
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($columns[$j] > $columns[$j + 1]) {
                // Exchange items if out of order
                $backupVariable = $columns[$j];
                $columns[$j] = $columns[$j + 1];
                $columns[$j + 1] = $backupVariable;
            }
        }
    }
    return $columns;
}



?>
<?php

function TwoNum($array, $target)
{
    $numbers = [];
    $seen = []; // Хеш-таблица для хранения чисел и их индексов
    
    for ($i = 0; $i < count($array); $i++) {
        $complement = $target - $array[$i]; // Ищем дополнение до target // 5
        if (isset($seen[$complement])) {
            $numbers[] = $seen[$complement]; // Индекс дополнения
            $numbers[] = $i; // Текущий индекс
            return $numbers;
        }
        $seen[$array[$i]] = $i; // Сохраняем текущее число и его индекс
    }
    
    return $numbers; // Если пара не найдена
}

$arr = [2, 3, 4, 5];
$n = 7;

print_r(TwoNum($arr, $n));

?>
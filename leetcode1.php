<?php

    function romanToInt($s) { // input: M C M X C I V
                                      //  1000 + 100 + 1000 + 10 + 100 + 1 + 5 = 2216
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $result = 0;
        for($i = 0; $i <= strlen($s); $i++)
        {
            $currentValue = $map[$s[$i]]; 
            $nextValue = $map[$s[$i+1]];

            if($nextValue > $currentValue)
            {
                $result -= $currentValue;
            }
            else 
            {
                $result += $currentValue;
            }
            
        }
        return $result;
    }

$a = "III";

echo romanToInt($a);
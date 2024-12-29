<?php

class MultiplicationTable{
    public function multiplicationTable(int $multiplier)
    {
        for($i = 1; $i <= $multiplier; $i++)
        {
            for ($j = 1; $j <= $multiplier; $j++) {
                printf("%4d", $i * $j);
             }
             echo "\n";
        }   
    }
}

$test = new MultiplicationTable();
$test->multiplicationTable(5);

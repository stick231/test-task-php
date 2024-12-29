<?php

class RangeNum{
    public function rangeNum(int $min, int $max) : array
    {
        $numRangeArr = [];

        for($minCycle = $min; $minCycle <= $max; $minCycle++){
            if(gmp_prob_prime($minCycle) === 2)
            {
                $numRangeArr[] = $minCycle;
            }
        }
        
       return $numRangeArr;
    }
}

$test = new RangeNum();
$test->rangeNum(11, 20);//test

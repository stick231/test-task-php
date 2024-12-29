<?php

class CommonDivisorMax{
	public function commonDivisors(array $arrNum)
	{ 
		$allDivisors = [];
		for($i = 0; $i < count($arrNum); $i++){
			$num = $arrNum[$i];
			for($k = 2; $k < $num; $k++){
				if($num % $k === 0){
					$allDivisors[] = $num / $k;
				}
			}	
		}	
		$countValuesArr = array_count_values($allDivisors);// ассоциативный массив key это число divisors, а value это количество его повторений в массиве 
		$countValuesArrFiltered = array_filter($countValuesArr, function ($elem) use ($arrNum) {
			return($elem >= count($arrNum)); // где value больше количества чисел в первоначальном массиве
		});
		return max(array_keys($countValuesArrFiltered)); // самое большое 
	}
}

$test = new CommonDivisor();
$test->commonDivisors([48, 12, 18]);

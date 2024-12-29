<?php

class DeclensionWord{
	private $word = 'компьютер';	
	private $exception = [];
	private $message = "У меня всего"; 

	public function DeclensionWordComputer($amount)
	{
		$lastDigital = $amount % 10;
		$lastTwoDigital = $amount % 100;
		$computerMessage = $this->message . " " . $amount . " " . $this->word;

		switch (true){
			case($lastTwoDigital >= 11 && $lastTwoDigital <= 20):
				echo $computerMessage . 'ов' . "\n";
				break;
			case($lastDigital >= 5 && $lastDigital <= 9):
				echo $computerMessage . 'ов' . "\n";
				break;
			case($lastDigital >= 2 && $lastDigital <= 4):
				echo $computerMessage . 'а' . "\n";
				break;
			default:
				echo $computerMessage . "\n";   
		}
	}
}

$test = new DeclensionWord();
$test->DeclensionWordComputer(25);
$test->DeclensionWordComputer(41);
$test->DeclensionWordComputer(1048);

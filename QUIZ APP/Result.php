<?php
class Result
{
	public $UserAnswers = array();

	public function ReceiveAnswers($Answers)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			array_push($Answers,$_POST['question1'],$_POST['question2'],$_POST['question3']);
		}
	  return $this->UserAnswers[] = $Answers;
	}

	public function CheckAnswersForProgramming($UserAnswers)
	{
		$RightAnswer = 0;
		if($this->ReceiveAnswers($UserAnswers['0'] == '4'))
			$RightAnswer++;
		if($this->ReceiveAnswers($UserAnswers['1'] == '3'))
			$RightAnswer++;
		if($this->ReceiveAnswers($UserAnswers['2'] == '2'))
			$RightAnswer++;
           var_dump($this->ReceiveAnswers($UserAnswers));
	   return $RightAnswer;
	}

}

$A = new Result();
$array = array ();
$B = new Result();
$k = 0;
var_dump($A->ReceiveAnswers($array));
var_dump($A->CheckAnswersForProgramming($k));



?>
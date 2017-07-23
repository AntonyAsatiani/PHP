<?php

// echo $_POST["username"]. " " .$_POST["email"] ;
//print_r($_SERVER);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($_POST['checksubject'] == 'Math')
	{
		header("Location: http://localhost/geolab/form/MathTest.html");
		exit();
	}
	elseif ($_POST['checksubject'] == 'Programming') {
		header("Location: http://localhost/geolab/form/ProgrammingTest.html");
		exit();
	}
}

?>
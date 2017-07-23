<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="submit.php" method="POST">

<label>Name</label><br>
<input type="text" name="username">
<br>
<label>Email</label><br>
<input type="email" name="email">
<br>
<select name="country">
<option name="Germany">Germany</option>
<option name="Georgia">Georgia</option>
<option name="Poland">Poland</option>

 </select>
<br>
 <input type="radio" name="checksubject" value="Math">Math<br>
 <input type="radio" name="checksubject" value="Programming">Programming<br>
<br>
<button type="submit">Start Quiz</button>
</form>
</body>
</html>
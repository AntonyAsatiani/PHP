<?php
setcookie("Name","Antoni",time()+3600,"/","",0);
setcookie("Email","anton.asatiani@gmail.com",time()+3600,"/","",0);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

<?php echo $_COOKIE["Name"]." ". $_COOKIE["Email"]; ?>

</body>
</html>
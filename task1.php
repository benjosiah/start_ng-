<?php



if (isset($_POST['submit'])) {
	$filename=$_POST['name'].".txt";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$conntact=$_POST['conntact'];
	$dis=$_POST['dis'];
	if (!file_exists($filename)) {
		$handdle=fopen($filename , 'w');
		fwrite($handdle, $name."\n ".$email."\n ".$conntact."\n ".$dis );
	}
	

}



?>
<!DOCTYPE html>
<html>
<head>
	<title> task </title>
</head>
<body>
 
 <form method="post">
 	<input type="text" name="name" placeholder="name">
 	<input type="text" name="email" placeholder="email">
 	<input type="text" name="conntact" placeholder="conntact">
 	<textarea name="dis" placeholder="description" ></textarea>
 	<input type="submit" name="submit">
 </form>
</body>
</html>
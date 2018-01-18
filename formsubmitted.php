<?php
	session_start();
	$name = $_SESSION['name'];  //can be empty since it was optional
	if ($name == ""){
		$name = "no name was provided";
	}
	$email=$_SESSION['email'];  //can be empty since it was optional
	if($email == ""){
		$email =" no email was provided";
	}

  $year=$_SESSION['year'];  //can be empty since it was optional
  if($year == ""){
    $email = "no year was provided";
  }

  $major=$_SESSION['major'];  //can be empty since it was optional
	if($major == ""){
		$major = "no major was provided";
	}

  unset($_SESSION['name']);
	unset($_SESSION['email']);
	unset($_SESSION['year']);
	unset($_SESSION['major']);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Creative Computing Club (Cornell) </title>
</head>

<body>


<nav>
  <ul>
    <li> <a href="index.php"> Home</a> </li>

  </ul>
 </nav>

<p> YAAAy, You submitted the form!!! Here is all the information: <br/>
  Name: <?php echo(htmlspecialchars($name) );?>        <br/>
  Email: <?php echo(htmlspecialchars($email) );?>.   <br/>
  Year: <?php echo(htmlspecialchars($year) );?>.   <br/>
  Major: <?php echo(htmlspecialchars($major) );?>.   <br/>

</p>

</body>
</html>

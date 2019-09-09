<body>
<?php
if (isset ($_POST ['submit']))
{
	include('Connection.php');
	
	$errorMessage = "Connection Failed";
	
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Title=$_POST['Title'];
	$Comment=$_POST['Comment'];

	
	if(!empty($errorMessage))
	{
		echo("<p>There is an error with your form:</p>\n");
		echo("<ul>" . $errorMessage . "</ul>\n");
	}
	
	else
	{
		$sql = "INSERT INTO blog VALUES('$name','$email','$title','$comment')";
	
		$data=mysqli_query($conn,$sql);
		
 if(!$data)
{
	die('could not connect:'. mysql_error());
}
	echo 'Enter data successfully';

	}
}
else
{
echo "Your form is not submitted yet, please fill the form and visit again" ;
}
?>

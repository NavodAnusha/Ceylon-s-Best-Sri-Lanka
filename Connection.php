<body>
<?php
$dbhost ='MySql@localhost:3306';
$dbuser ='root';
$dbpass='1234';
$db='budgettravelsrilanka';

$conn= mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn)
{
	die('could not connect:'. mysql_error());
	}
	echo 'Connected successfully';
	
	mysqli_select_db($conn,$db);//select data base
	echo'Data base is'.$db;
	//mysqli_close($conn);
?>
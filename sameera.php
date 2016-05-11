<?php
session_start();
$firstname=$_POST['firstname'];
$contact=$_POST['mobile'];
$type=$_POST['type'];
$Address=$_POST['firstline'];
$City=$_POST['city'];
$State=$_POST['state'];
if($firstname!='' && $contact!='' && $type!='' && $Address!='' && $City!='' && $State!='')
{
	$connect = mysqli_connect("localhost","root","","lailisa");
	mysqli_query($connect,"INSERT INTO registeredit VALUES ('".$firstname."','".$contact."','".$type."','".$Address."','".$City."','".$State."');");
	if(mysqli_affected_rows($connect) > 0)
	{
		echo 'Registration Successful ! ';
		header('Location:http://localhost/sam/end.html');
	}
	else
	{
		echo 'ERROR[105]: Invalid Login';
			header('Location:http://localhost/sam/registeredit.html');
	}
}
else
{
echo 'ERROR[543]: One or More fields missing';
}


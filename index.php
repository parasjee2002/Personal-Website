<?php
// database connection code
if(isset($_POST['submit']))
    {
// $con = mysqli_connect('localhost', 'root', '','db_contact');
// get the post records
		$txtName = $_POST['txtName'];
		$txtEmail = $_POST['txtEmail'];
		$txtSubject = $_POST['txtSubject'];
		$txtMessage = $_POST['txtMessage'];

		$con = mysqli_connect('localhost', 'root', '','db_connect');
// database insert SQL code
	if (!$con)
		{
		die("Connection failed!" . mysqli_connect_error());
		}
	$sql = "INSERT INTO tbl_contact (Id, fldName, fldEmail, flSubject, fldMessage) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

// insert in database 
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		echo "Contact Records Inserted";
	}
	mysqli_close($con);
}
?>
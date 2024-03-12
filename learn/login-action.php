<?php
include("config.php");

if ((isset($_POST["em"])) && (isset($_POST["pw"]))) {
	# code...

$em=sanitizeInput($_POST["em"]);
$pw=sanitizeInput($_POST["pw"]);

//connect with database
$con = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);
if ($con->connect_error) {
trigger_error('Database connection failed: ' . $con->connect_error, E_USER_ERROR);
}

//querry
$sql='SELECT * FROM user WHERE email = ?';
$stmt = $con->prepare($sql);
if($stmt === false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $con->error, E_USER_ERROR);
}

$stmt->bind_param('s',$em);
$stmt->execute();
$stmt->store_result();


if($stmt->num_rows==1){
$stmt->bind_result($id,$email,$password,$bio,$fullname,$status);
while ($stmt->fetch()) {
   //checking encrypted password

	if($pw==$password) {
	$_SESSION["loggedin"]=true;
    }


    else{
    	header("Location:index.php?msg=PWNM");
		exit;
		 }

	$_SESSION["uid"]=$id;
	$_SESSION["ustatus"]=$status;
}
$stmt->free_result();
$stmt->close();
}
else{
	header("Location:index.php?msg=EMNM");
	exit;
}
//close with db
$con->close();
}
else{
	header("Location:index.php");
	exit;
}
header("Location:index1.php");
	exit;

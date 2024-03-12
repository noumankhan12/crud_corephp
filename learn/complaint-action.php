<?php
session_start();


		if ((isset($_POST["description"]))) {
		$description=($_POST["description"]);

			//connect with database
			$con=mysqli_connect("localhost","root","","testing");

				if(mysqli_connect_error()){
					echo "<script>
					alert('cannot connect to database');
					windows.location.href='mycart.php';
					</script>";
					exit();
				   }


			//querry
			$sql='INSERT INTO compain (description) VALUES(?)';
			$stmt = $con->prepare($sql);
			if($stmt === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $con->error, E_USER_ERROR);
			}

			$stmt->bind_param('s',$description);
			$stmt->execute();
			$stmt->close();

			//close with db
			$con->close();
			header("Location:index.php?msg=SAC");
			exit;
	}



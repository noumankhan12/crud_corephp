<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{    
	$con=mysqli_connect("localhost","root","","testing");

	if(mysqli_connect_error()){
		echo "<script>
		alert('cannot connect to database');
		windows.location.href='mycart.php';
		</script>";
		exit();
	}

	if (isset($_POST['purchase']))
	 {
		$query1="INSERT INTO `order_manager`(`Full_name`, `Phone_no`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
		if(mysqli_query($con,$query1))
		{
			//binding id of uper query 1 in query 2
			$Order_id=mysqli_insert_id($con);
			$query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
			$stmt=mysqli_prepare($con,$query2);
			if($stmt)
			{
				mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
				foreach ($_SESSION['cart'] as $key => $value) 
				{
					$Item_Name=$value['Item_Name'];
					$Price=$value['Price'];
					$Quantity=$value['Quantity'];
					mysqli_stmt_execute($stmt);
				}
					unset($_SESSION['cart']);
					
					header("Location:mycart.php?msg=OP");

			}
		}
		else
		{
			echo "<script>
			alert('sql error');
			windows.location.href='mycart.php';
			</script>";

		}
	 }

}

?>
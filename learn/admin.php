
<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">Shopping Cart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      
    </div>  
</nav>

	<div class="container" >
		<div class="row">
			<div class="col-lg-12  text-center border rounded bg-light my-5">
				<h1 class="btn-success">WELLCOME TO ADMIN PANEL</h1></div>
				<div class="col-lg-12 text-center border rounded bg-light my-5 text-align-center">
					 <form action="login-action.php" method="POST">
						 <div class="form-group">
							    <h5>Enter Your Email Address</h5>
							    <input type="text" name="em" class="form-control" placeholder="email@example.com" required >
						 </div>
						  <div class="form-group">
							    <h5>Enter Your Password</h5>
							    <input type="Password" name="pw" class="form-control"placeholder="password" required  >
						 </div>	 
				  
				   <br>
					<input type="submit" class=" btn btn-danger " value=" Start Your Session">
			   </form><br>
				</div>


			</div>
		</div>
	</div>
	
	

</body>
</html>
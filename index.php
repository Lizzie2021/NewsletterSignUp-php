<?php 
	$title = "Register";
	require_once "includes/header.php";
  require_once "db/conn.php";

?>

  <form class="text-center register" method="get" action="success.php">
    <img class="mb-4" src="css/images/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Please register to my newsletter!</h1>
	<br/>

	<div class="form-floating">
      <input required type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
      <label for="fname">First Name</label>
    </div>
	<div class="form-floating">
      <input required type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
      <label for="lname">Last Name</label>
    <div class="form-floating">
      <input required type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <br/>
    <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Submit</button> 
  </form>
  <?php 
      
      require_once "includes/footer.php";
  ?>

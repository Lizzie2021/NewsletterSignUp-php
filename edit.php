<?php 
	$title = "Success";
	require_once "includes/header.php";
  require_once "db/conn.php";
  
  
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $crud->getSubscriber($id);
  }else{
    echo "Error";
  }

?>
<form class="text-center register" method="post" action="editsuccess.php?id=<?php echo $id ?>">

    <h1 class="h3 mb-3 fw-normal">Please edit your information!</h1>
	<br/>
	<div class="form-floating">
      <input required type="text" class="form-control" name="fname" value="<?php echo $result['firstname']?>" id="fname" placeholder="First Name">
      <label for="fname">First Name</label>
    
	<div class="form-floating">
      <input required type="text" class="form-control" name="lname" value="<?php echo $result['lastname']?>" id="lname" placeholder="Last Name">
      <label for="lname">Last Name</label>
    <div class="form-floating">
      <input required type="email" class="form-control" name="email" value="<?php echo $result['email']?>" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <br/>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Save</button>
  </form>



<?php 
   require_once "includes/footer.php";
  ?>
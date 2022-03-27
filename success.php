<?php 
	$title = "Success";
	require_once "includes/header.php";
  require_once "db/conn.php";

  if(isset($_GET['submit'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $checkEmail = $crud->checkEmail($email);
    if($checkEmail){
      $issuccess = $crud->insert($fname,$lname,$email);
      if(isset($issuccess)){
        $id = $issuccess;
        echo '<h1 class="alert alert-success">You have been registered successfully!</h1>';
      }else{
        echo '<h1 class="alert alert-danger">Error, please try again.</h1>';
      }
    }else{
          header("Location: emailexists.php?fname=$fname&lname=$lname&email=$email");
    }
    
  }
?>
 
  
  

  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo ucfirst($_GET['fname']).' '.ucfirst($_GET['lname']);?></h5>
    
    <p class="card-text"><?php echo $_GET['email'];?></p>
    <a href="edit.php?id=<?php echo $id?>" class="btn btn-primary">Edit</a>
    <a onclick="return confirm('Are you sure you want to unsubscribe?')" 
    href="delete.php?id=<?php echo $id?>" class="btn btn-danger">Unsubscribe</a>
    
  </div>
</div>  

<?php 
   require_once "includes/footer.php";
  ?>

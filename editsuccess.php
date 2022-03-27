<?php 
	$title = "Edit Success";
	require_once "includes/header.php";
    require_once "db/conn.php";

  if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $issuccess = $crud->update($id,$fname,$lname,$email);
    if($issuccess){
      
      echo '<h1 class="alert alert-success">Your changes have been saved successfully!</h1>';
    }else{
      echo '<h1 class="alert alert-danger">Error, please try again.</h1>';

    }
  }
?>

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $fname ?></td>
      <td><?php echo $lname ?></td>
      <td><?php echo $email ?></td>
    </tr>
    
  </tbody>
</table>



<?php 
   require_once "includes/footer.php";
  ?>
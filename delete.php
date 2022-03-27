<?php 
	$title = "Success";
	require_once "includes/header.php";
    require_once "db/conn.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->delete($id);
        if($result){
            
            echo '<h1 class="alert alert-success">You have unsubscribed successfully!</h1>';
        }else{
          echo '<h1 class="alert alert-danger">Error, please try again.</h1>';
    
        }
    }



?>






<?php 
   require_once "includes/footer.php";
?>

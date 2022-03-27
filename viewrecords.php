<?php 
	$title = "View Records";
	require_once "includes/header.php";
    require_once "db/conn.php";

    $result = $crud->getSubscribers();

?>

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php while($r=$result->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <td><?php echo $r['id'] ?></td>
      <td><?php echo $r['firstname'] ?></td>
      <td><?php echo $r['lastname'] ?></td>
      <td><?php echo $r['email'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </br>
    </br>
    </br>
    </br>


<?php 
   require_once "includes/footer.php";
?>
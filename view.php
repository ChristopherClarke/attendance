<?php  require_once 'includes/header.php';
require_once 'db/conn.php';
$title ='View Record';




if(isset($_GET['id'])){
    $id= $_GET['id'];
    $result= $crud->getAttendeesDetails($id);
}else{

    echo "<h1 class='text-danger'> Try again</h1>";
}
?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname'] .''. $result['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name'];?></h6>
    <p class="card-text">Date of Birth: <?php echo $result['dateofbirth'];?></p>
    <p class="card-text">Email: <?php echo $result['emailaddress'];?></p>
    <p class="card-text">Contact number: <?php echo $result['contactnumber'];?></p>
    
  </div>
</div>

<a href="viewrecords.php"class="btn btn-info">List</a>
<a href="edit.php?id=<?php echo $result['attendee_id'] ?>"class="btn btn-warning">Edit</a>
<a onclick="return confirm('delete record')" href="dellete.php?id=<?php echo $result['attendee_id'] ?>
"class="btn btn-danger">Delete</a></td>

<br>
<br>


<?php   require_once 'includes/footer.php'; ?>
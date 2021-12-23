<?php  require_once 'includes/header.php';

$title ='Sucess';

require_once 'db/conn.php';

if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $dob= $_POST['dob'];
    $email= $_POST['email'];
    $contact= $_POST['phone'];
    $specialty= $_POST['specialty'];


    $isSuccess = $crud->insertAttendees($firstname,$lastname,$dob,$email,$contact,$specialty);

    if ($isSuccess){
echo '<hi claass="text-center text-succes">You have been registered</h1>';
    }
    else{

      include 'includes/error.php';
//echo '<h1 class= "text-center text-danger">therewas an error in processing</h1>';
    }

}

?>
<h1 class="text-center text-success">You have Registered</h1>

<!--gets method-->
<!--div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><//?php //echo $_GET['firstname'] .''. $_GET['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><//?php// echo $_GET['specialty'];?></h6>
    <p class="card-text">Date of Birth: <//?php //echo $_GET['dob'];?></p>
    <p class="card-text">Email: <//?php //echo $_GET['email'];?></p>
    <p class="card-text">Contact number: <//?php// echo $_GET['phone'];?></p>
    
  </div>
</div--->


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'] .''. $_POST['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty'];?></h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob'];?></p>
    <p class="card-text">Email: <?php echo $_POST['email'];?></p>
    <p class="card-text">Contact number: <?php echo $_POST['phone'];?></p>
    
  </div>
</div>
<?php  

//echo $_GET['firstname'];
//echo $_GET['lastname'];
//echo $_GET['dob'];
//echo $_GET['phone'];
//echo $_GET['specialty'];
//echo $_GET['email'];

?>
<br>
<br>
<br>
<br>
 <?php   require_once 'includes/footer.php'; ?>
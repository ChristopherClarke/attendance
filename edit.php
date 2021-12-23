
<?php  require_once 'includes/header.php';
require_once 'db/conn.php';
$title ='Edit';

$reulsts = $crud->getSpecialties();

if(!isset($_GET['id'])){
   // echo 'error';
include 'includes/error.php';
header("Location:viewrords.php");

}
else{
    $id =$_GET['id'];
    $attendee = $crud->getAttendeesDetails($id); ?>

    <h1 class= "text-center">Registration for IT Confrence</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name= "id" value="<?php echo $attendee['attendee_id'] ?>"/>
        <div class="mb-3">
    <label for="firstname" class="form-label">First name</label>
    <input type="text" class="form-control" value=<?php echo $attendee['firstname']?>id="firstname"name="firstname" >
         </div>

         <div class="mb-3">
    <label for="lastname" class="form-label">Last name</label>
    <input type="text" class="form-control" value=<?php echo $attendee['lastname']?>id="lastname"name="lastname">
         </div>

         <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" value=<?php echo $attendee['dateofbirth']?>id="dob" name="dob">
         </div>

         <div class="mb-3">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control"value=<?php echo $attendee['specialty']?> id="specialty" name="specialty">
         <option value="1">Database Administrator</option>
         <option value="2">Software Developer </option>
         <option value="3">Web Administrator</option>
         <option value="4">Other</option>

<!--?php if($r['specialty_id']==$attendee['specialty_id'])echo  'selected'?>--?php echo $r['name];?>--->
    <!--not working it cuts outa portion of the form
    ?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <option value="?php  echo $r['specialty_id'] ?>">?php  echo $r['name'];?></option>
          ?php } ?--->  
          </select>
         </div>  

     <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" value=<?php echo $attendee['emailaddress']?>id="email" name="email">
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
         </div>

   <div class="mb-3">
    <label for="phone" class="form-label">Contact Number</label>
    <input type="text" class="form-control" value=<?php echo $attendee['contactnumber']?>id="phone" name="phone">
    <div id="email" class="form-text">We'll never share your number with anyone else.</div>
         </div>
         
  <button type="submit" name="submit"class="btn btn-block btn-success">Save Changes</button>
  
</form>

<?php
} ?>


<br>
<br>

    <?php   require_once 'includes/footer.php'; ?>
</html>
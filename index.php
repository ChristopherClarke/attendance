


<?php  require_once 'includes/header.php';
require_once 'db/conn.php';
$title ='index';

$reulsts = $crud->getSpecialties();

?>
    <h1 class= "text-center">Registration for IT Confrence</h1>

    <form method="post" action="sucess.php">
        <div class="mb-3">
    <label for="firstname" class="form-label">First name</label>
    <input required type="text" class="form-control" id="firstname"name="firstname" >
         </div>

         <div class="mb-3">
    <label for="lastname" class="form-label">Last name</label>
    <input required type="text" class="form-control" id="lastname"name="lastname">
         </div>

         <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input required type="text" class="form-control" id="dob" name="dob">
         </div>

         <div class="mb-3">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
         <option value="1">Database Administrator</option>
         <option value="2">Software Developer </option>
         <option value="3">Web Administrator</option>
         <option value="4">Other</option>


    <!--not working it cuts outa portion of the form
    ?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <option value="?php  echo $r['specialty_id'] ?>">?php  echo $r['name'];?></option>
          ?php } ?--->  
          </select>
         </div>  

     <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input required type="email" class="form-control" id="email" name="email">
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
         </div>

   <div class="mb-3">
    <label for="phone" class="form-label">Contact Number</label>
    <input required type="text" class="form-control" id="phone" name="phone">
    <div id="email" class="form-text">We'll never share your number with anyone else.</div>
         </div>
         
  <button type="submit" name="submit"class="btn btn-block btn-primary">Submit</button>
  
</form>
<br>
<br>

    <?php   require_once 'includes/footer.php'; ?>
</html>
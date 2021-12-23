<?php  require_once 'includes/header.php';
require_once 'db/conn.php';
$title ='View Records';
$results = $crud->getAttendees();


?>
<table class= "table">
    <tr>
        <th>#</th>
        <th>Firt Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email Address</th>
        <th>Contact Number</th>
        <th>Specialty</th>
        <th>Actions</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
<tr>

<td><?php echo $r['attendee_id'] ?> </td>
<td><?php echo $r['firstname'] ?></td>
<td><?php echo $r['lastname'] ?> </td>
<td><?php echo $r['dateofbirth'] ?></td>
<td> <?php echo$r['emailaddress'] ?></td>
<td><?php echo $r['contactnumber'] ?></td>

<!--this  is not working correctly--->
<td><?php echo $r['name'] ?></td>
<td><a href="view.php?id=<?php echo $r['attendee_id'] ?>"class="btn btn-primary">View</a>
<a href="edit.php?id=<?php echo $r['attendee_id'] ?>"class="btn btn-warning">Edit</a>
<a onclick="return confirm('delete record')" href="dellete.php?id=<?php echo $r['attendee_id'] ?>"class="btn btn-danger">Delete</a></td>
</tr>

        <?php  }?>
</table>



<br>
<br>

<?php   require_once 'includes/footer.php'; ?>
</html>
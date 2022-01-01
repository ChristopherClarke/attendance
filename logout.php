<?php 
include_once 'includes/session.php'?>
<?php 
// destroys the session. redirect to the index page. 
    session_destroy();
    
    header('Location: index.php');
?>
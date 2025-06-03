<html>


<?php
  $name= $_POST['fullName'];
  $email = $_POST['email'];
  $pick = $_POST['pick'];
  $drop = $_POST['drop'];
  print "Thanks for the booking, ";
  print $name;
  print ". Your ride from ";
  print $pick;
  print " to ";
  print $drop;
  print " is confirmed. Rest of the details will be share on your email ";
  print $email;
  print " in a while";
 
?>

</html>
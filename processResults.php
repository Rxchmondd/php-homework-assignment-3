<?php
require('db.php');
if(isset($_POST['submit']))
{
  $fname = trim($_POST['fname']);
  $lname = trim($_POST['lname']);
  $email = trim($_POST['email']);
  $company = trim($_POST['company']);
  $option = trim($_POST['options']);
  $uname = trim($_POST['uname']);
  $pword = trim($_POST['pword']);
  $cpass = trim($_POST['cpass']);

  if($pword = $cpass)
  {
     $query="INSERT INTO citizens (first_name, last_name, email, company, surveyAns)
     VALUES('$fname', '$lname', '$email', '$company', '$option')";

     $result = mysqli_query($conn, $query);
     }
     else
     {
       echo "passwords need to match";
     }

     if(empty($fname)||empty($lname)||empty($email)||empty($company)||empty($uname)||empty($pword))
     {
       echo "forms are empty";
     }

     if(strlen($pword) <= 8)
     {
       echo "your password should be at least 8 characters long";
     }

     if(!preg_match('/[A-Za-z]/', $pword) && !preg_match('/[0-9]/', $pword))
     {
       echo "Your password must have letters AND numbers";
     }
}
?>

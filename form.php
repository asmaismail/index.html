<?php 
include_once 'connection.php';
if(isset($_POST['formsubmit']))
{
  
   $name = $_POST['username'];
   $email = $_POST['useremail'];
   $pass= $_POST['userpass'];
   $INSERT = "INSERT INTO signup (user_name, user_email, user_pass) VALUES ('$name,$email','$pass')";
   $query = mysqli_query($conn,$INSERT);
   if($query)
   {
            echo "data is inserted";
   }
   else{
       echo "not inserted";
   }

}

else{
   echo "not submit";
}
?>

<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","mysql");

    if(isset($_POST['submit']))
    {
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $city= $_POST['city'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];

    $sql="INSERT INTO  Personaldata(FirstName,LastName,Gender,Age,Email,Mobile,City) VALUES('$firstname','$lastname','$gender','$age','$email','$mobile','$city')";
    mysqli_query($conn,$sql);
    if(!$conn)
      echo "Error in executing the query";
    else
     {
      echo "Data inserted successfully!! ", $firstname;
    }
  }
  ?>
<!doctype html>
<html>
<head>
  <title>Form</title>
  </head>
<body>
<form action="register.php" method="POST" target="_blank" >
  Enter First name:
  <input type="text" name="firstname"  required>
  <br><br>
  
   Enter Last name:
  <input  type="text" name="lastname"  required>
  <br><br>
   Enter  Email:
  <input type="text" name="email"  required>
  <br><br>
  Enter  Mobile:
  <input type="text" name="mobile"  required>
  <br><br>
  Enter  City:
  <input type="text" name="city"  required>
  <br><br>
  Enter Age:
   <input type="text" name="age" required>
   <br>
<div>
  <input type="radio" value="Male" name="gender"><label>Male
   <input type="radio" value="Female" name="gender"><label>Female
   <br>
 <input type="Submit" name="submit">
 
</div>
</form>
</body>
</html> 
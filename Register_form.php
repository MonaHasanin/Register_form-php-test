<?php  
include "./day9.php";
echo "<br>";

if (isset($_POST['sign_up'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO customers( full_name ,email,phone_number,password,gender) VALUES (?,?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$full_name, $email , $phone_number , $password, $gender]);

echo "Record Inserted Successfully";

} 

echo "<br>";

if (empty ($full_name) || empty ($password) || empty ($email)) {
    echo "Enter your name and password and email";
} else {
    echo "Hello " .$full_name ;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br> 

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<div class="form-group>
<label for="full_name">full name</label>    
 <input class="form_control" type="text" id="full_name" name="full_name"> <br> <br>
 </div>
 <br>
 <div class="form-group>
 <label for="Password">Password </label>    
 <input class="form_control" type="password" name="password">
 </div>
 <br>
 <div class="form-group>
<label for="email">email </label>    
     <input type="email" name="email">
    </div>
    <br>
    <div class="form-group>
<label for="phone_number">phone number </label>    
     <input class="form_control" type="text" name="phone_number">
     </div>
     <br>
     <div class="radiobutton">
        <label><input type="radio" value="male" name="gender" class="form_control">Male</label>
         <label><input type="radio" value="female" name="gender" class="form_control">Female</label>
     </div>
     <br>
     
    <button type="submit" name="sign_up">login</button>
    <br> <br> <br>

    
<br><br><br> 
</body>
</html>

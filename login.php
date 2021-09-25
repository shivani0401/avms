<?php
include 'connect.php';
$error="";
if(isset($_POST['s1'])){
 $ui=$_POST['uid'];
 $password=$_POST['txt_password'];
 $query="SELECT * FROM admin WHERE username='$ui'AND upassword='$password'";
 $result = mysqli_query($con,$query);
 $count= mysqli_num_rows($result);
 if($count)
 {
     $error="";
     header('location:admin_dashboard.php');
 }
 else
 {
     $error="Invalid Username or Password";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>


<div class="container-fluid">
<div class="row">
<div class="col-4">
    
</div>
<div class="col-4 m-4">
   
<form method="POST">
<h3 class="text-center">Admin Login  </h3>
<input type="text" placeholder="Username" class="form-control" name="uid" required ><br>
<input type="password" placeholder="Password" class="form-control" name="txt_password" required><br>
<button class="btn btn-success btn-lg btn-block" name="s1">LOGIN</button>
<label class="text-danger"><?php echo $error; ?></label>


</form>



</div>
<div class="col-4"></div>
</div>
</div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>
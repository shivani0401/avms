<?php
include 'connect.php';
if(isset($_POST['s1']))

{
  date_default_timezone_set('Asia/Kolkata'); 
  $date = date("d-m-Y h:i:sa");
  $id =  $_POST['id'];
 $wname = $_POST['wname'];
 $uname = $_POST['uname'];
 $pass = $_POST['pass'];
 $mobile_no = $_POST['mobile'];
 $adhar = $_POST['adharno'];
 $adress = $_POST['adress'];
 $salary = $_POST['salary'];
 $shift = $_POST['shift'];
 
 $query ="INSERT INTO watchmen( ID, wname, userName, pass, adress, aadhar, mobile, salary, shift ) 
 VALUES ('$id','$wname','$uname', '$pass', '$adress', '$adhar', '$mobile_no', '$salary', '$shift');";
 $res = mysqli_query($con,$query);
 if($res)
 {
   echo '<script type="text/javascript"> alert("Data Inserted Successfully!"); </script>';
  }
  else{
   echo '<script type="text/javascript"> alert("error!"); </script>';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Watchman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<?php
include 'header.php';
?>
        <div class="col-md-5 m-auto">
          <center>
          <h1 class="display-6">Add new Watchman</h1>
          </center>
        <form method="POST">
        <p class="lead">Date: <?php
        date_default_timezone_set('Asia/Kolkata');
          echo date('d-m-Y h:i:sa');
          ?></p>
            <div class="row mt-2 height align-items-center justify-content-center">
            <div class="col-md">
                <input type="text" class="form-control" placeholder="ID" name="id" required><br>
            </div>
            <div class="col-md">
                <input type="text" class="form-control" placeholder="Name" name="wname"required><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="UserName" name="uname" required><br>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Password" name="pass" required><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required><br>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Aadhar Number" name="adharno"required><br>
              </div>
              </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Address" rows="3" name="adress" required><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Shift" name="shift" required><br>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Salary" name="salary" required><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <button class="btn btn-success btn-block mb-4" type="submit" name="s1">Submit</button>
                </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    
    <?php
      include 'footer.php';
    ?>
</body>
</html>
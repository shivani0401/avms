<?php
include 'connect.php';
if(isset($_POST['s1']))

{
  date_default_timezone_set('Asia/Kolkata'); 
  $date = date("d-m-Y h:i:sa");
  $id = $_POST['id'];
 $s_name = $_POST['sname'];
 $mob = $_POST['mob'];
 $address = $_POST['address'];
 $apartment_no = $_POST['flatno'];
 $query="INSERT INTO servant(id, sname, mob, adress, flatno) VALUES ('$id','$s_name', '$mob', '$address', '$apartment_no');";
 $res= mysqli_query($con,$query);
 if($res)
  {
    echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';
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
    <title>New servant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<?php
include 'watchHead.php';
?>
        <div class="col-md-5 m-auto">
          <center>
          <h1 class="display-6">Add new Servant</h1>
          </center>
        <form method="POST">
        <p class="lead">Date: <?php
        date_default_timezone_set('Asia/Kolkata');
          echo date('d-m-Y h:i:sa');
          ?></p>
            <div class="row mt-2 height align-items-center justify-content-center">
              <div class="col-md">
                <input type="text" class="form-control" placeholder="ID" name="id"><br>
              </div>
            </div>
            <div class="row mt-2 height align-items-center justify-content-center">
              <div class="col-md">
                <input type="text" class="form-control" placeholder="Name" name="sname"><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Mobile Number" name="mob"><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Apartement no" name="flatno"><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                 <!-- <a href="text1.php">Add Image</a> -->
                  <button class="btn btn-success btn-block mb-4" type="submit" name="s1">Submit</button>
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
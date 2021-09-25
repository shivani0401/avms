<?php
session_start();
if(isset($_POST['s'])){
  include 'connect.php';
  $rm=$_POST['rm'];
  $id=$_SESSION['id'];
  date_default_timezone_set('Asia/Kolkata'); 
  $date = date("Y-m-d H:i:s");
  $query="UPDATE visitors SET exittime='$date',remark='$rm' WHERE record='$id'";
  mysqli_query($con,$query);
     
  header('location:manage_new_visitors.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php
include 'header.php';
include 'sidebar.php';
?>
<form method="POST">
 
    <div class="row">
    <div class="col-sm-3"></div>
<div class="col-sm-8">
 <div class="row">
               <h3 class="text-center m-3">Visitor Details</h3>
               <?php
               
          include "connect.php";
          $id=$_GET['record'];
          $_SESSION['id']=$id;
          $query = "SELECT * FROM visitors WHERE record='$id'";
          $result = mysqli_query($con,$query);
          while($res = mysqli_fetch_array($result))
          {
            ?>
            
        
        <table class="table table-stripped table-bordered">
            
           <tr scope=""><td>Visitor Name</td><td><?php echo $res['v_name'];?></td></tr>
           <tr><td>Mobile Number</td><td> <?php echo $res['mobile']; ?></td></tr>
           <tr><td>Address</td><td><?php echo $res['v_add']; ?></td></tr>
           <tr><td>Apartment Number</td><td><?php echo $res['a_no']; ?></td></tr>
           <tr><td>Whom To Meet</td><td><?php echo $res['whom']; ?></td></tr>
           <tr><td>Reason To Meet</td><td><?php echo $res['meeting']; ?></td></tr>
           <tr><td>Visitor Entering Time</td><td><?php echo $res['entertime']; ?></td></tr>
           <?php
              if($res['remark']==NULL)
              {
                ?>
              <tr><td>Remark</td><td><input type="text" class="form-control" name="rm"> </td></tr>
              
           
           <?php
              }
              else
              {
                ?>
                <tr><td>Remark</td><td><?php echo $res['remark']; ?></td></tr>
                <tr><td>Visitor Exiting Time</td><td><?php echo $res['exittime']; ?></td></tr>
              <?php
              }
              ?>

          



          <?php
          }
          ?>
        </table>
        <button class="btn btn-success btn-lg btn-block" name="s">Update</button>
 </div>    
 </div>     
</div>  
</form>   
<?php
 include 'footer.php';
?> 
</body>
</html>
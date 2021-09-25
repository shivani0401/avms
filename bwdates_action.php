
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php';
//include 'sidebar.php';
?>
<div class="container-fluid">
<div class="row">
<div class="col">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Visitor Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Visitor Address</th>
      <th scope="col">apartment no</th>
      <th scope="col-4">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'connect.php';
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $query="SELECT * FROM visitors WHERE entertime BETWEEN '$d1' AND '$d2'";
    $result=mysqli_query($con,$query);
    while($res=mysqli_fetch_array($result))
    {
  ?>
    <tr>
      <td><?php echo $res['v_name'];?></td>
      <td><?php echo $res['mobile'];?></td>
      <td><?php echo $res['v_add'];?></td>
      <td><?php echo $res['a_no'];?></td>
      <td>Name of owner: <?php echo $res['whom'];?><br>
      Reason to meet: <?php echo $res['meeting']?><br>
      Date: <?php echo $res['entertime'];?><br>
      </td>
      
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</div>
<?php
  include 'footer.php';
?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitors Details from date to date</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<?php
      include 'header.php';
      else if(isset($_POST["s1"])&& $_POST["s1"]=="dates"){

        if( empty($_POST["d1"])|| empty($_POST["d2"])) 
          echo "<br><br><span style = 'color : red;'>Select a valid option</p>";
       else{
          $datePF = $_POST['d1'];
              $dateFP = $_POST['d2'];
          //  $dateP =explode('-',$_POST['dateP']);
          //   $dateF = explode('-', $_POST['dateF']);		     
          //                            /* Vriables used many times seperatly , 
          //                             * so can't use arrray now !! 
          //                             * future Reminder 
          //                             */
       
          //  $day_start = $dateP[2];
          //  $day_end = $dateF[2];
          //  $month_start = $dateP[1];
          //    $month_end = $dateF[1];
          //    $year_start = $dateP[0];
          //  $year_end = $dateF[0];
            // $inputDate = array("$day_start", "$day_end", "$month_start", "$month_end", "$year_start", "$year_end");
              
          if($day_end >= $day_start && $month_end >= $month_start && $year_end >= $year_start){
          if($day_start <=31 && $day_end<=31){
           $sql = "SELECT * FROM info_visitor WHERE day >= '$day_start' AND day <= '$day_end' AND year >= '$year_start' 
                     AND year <= '$year_end' AND month >= '$month_start' AND month <='$month_end'";
            $result = mysqli_query($link,$sql);
                $count = mysqli_num_rows($result);
          if($count){
       
          if($inputDate[0] == $inputDate[1])
           echo "<br><br><h3 style = 'padding-left: 16px;'>Visitor Information for $inputDate[0]-$inputDate[2]-$inputDate[4]<br/> :</h3>";
          else
           echo "<br><br><h3 style = 'padding-left: 16px;'>Visitor Information from $inputDate[0]-$inputDate[2]-$inputDate[4] to 
                   $inputDate[1]-$inputDate[3]-$inputDate[5] : <br/></h3>";
           
           headingMake($result);
          
          }else{echo "<br><br><span style = 'color : red;'>No Match Found Sorry</span>";}
          }else{echo "<br><br><span style = 'color : red;'>Their are max 31 days in any month !</span>";}
         
           } else echo "<br><br><p style = 'color : red;'>select correct order, from past  to future !</p>";}
          } 
?>   
<form action="bwdates_action.php" method="POST">  
  <div class="row m-3">
    <div class="col-3">
     
    </div>
     <div class="col-6">
     <div class="card">
  <div class="card-header">
    Between Dates Reports
  </div>
  <div class="card-body">
      <label>From Date</label>
    <input type="date" class="form-control" name="d1"><br>
    <label>To Date</label>
    <input type="date" class="form-control" name="d2"><br>
    <button type="submit" class="btn btn-success btn-lg btn-block" name="s1">Submit</button>

  </div> 
  </div>
  </div>
  </div>
</form>    
<?php
 include 'footer.php';
?>
</body>
</html>
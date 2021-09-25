<?php
    $img = $_POST['image'];
    $folderPath = "E:\MCA notes\avmsImgs\ ";
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
    
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

    setcookie("filename",$file);
    

   // include 'connect.php';
   // $query="INSERT INTO visitors(imgPath) VALUES ($file)";
   // mysqli_query($con,$query);
  
    //print_r("Image stored successfully!". $file);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Stored</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   
</head>
<body>
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
    <h3>Image stored successfully!</h3>
    <input type = "submit" value = "Go Back to Visitors page" class="btn btn-success" onclick="history.go(-2)">
</div>
    
</body>
</html>
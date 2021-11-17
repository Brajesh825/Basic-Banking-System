<?php 
require "vendor/autoload.php";
require "config-cloud.php";
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$file_tmp=$_FILES['file']['tmp_name'];

    $data =    \Cloudinary\Uploader::upload($file_tmp);
    $URL = $data['url'];
   
  $con = mysqli_connect('localhost','root','password','cloudinary');
  if(!$con)
  {
    echo 'Not connected to server';
  }
  $name = $_POST['name'];
  $sql = "INSERT INTO `image` (`imageName`, `imagePath`) VALUES ('$name', '$URL');";

  if(!mysqli_query($con,$sql))
  {
    echo 'Not inserted';
  }
  else
  {
    echo 'inserted';
  }
  header("url=index.php");
  }
 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ideal Village</title>
</head>
<body>
	
<form method="post" enctype="multipart/form-data">
	<input type="text" name="name" required="" placeholder="name ">
  <?php echo cl_image_upload_tag('image_id'); ?> 
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
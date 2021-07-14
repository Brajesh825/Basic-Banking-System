<?php
require "assets/config.php";
$name=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/ministatement.css">
	</head>


	<body >	
	<a href="index.php">
		<button class="btn"><i class="fa fa-home"></i></button>
	</a>
		<h2><?php echo "Mini Statement of ".$name?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<?php while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<div>
		
	</body>
</html>
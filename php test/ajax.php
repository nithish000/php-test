<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Retrieval</title>
</head>
<body>
 <div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <?php
      include 'connect.php';
     $name = $_POST['name'];
     if(empty($name))
		$query =" SELECT * FROM datadetails ";
	 else
		$query =" SELECT * FROM datadetails WHERE 'name' = '$name'";
 	 $result = mysqli_query($con,$query);
	 $count = 0;
	 $arr=array();
	 while($row=mysqli_fetch_array($result))
	{
	 $arr[]=$row;
	 $count++;
	}
	for($i=0;$i<$count;$i++)
	{
	echo "<tr>";
	echo "<td>".$arr[$i]['name']."</td>";
	echo "<td>".$arr[$i]['phone']."</td>";
	echo "<td>".$arr[$i]['email']."</td>";
	echo "</tr>";
	}
	 mysqli_close($con);
    ?>
  </table>
</div>
 </body>
</html>

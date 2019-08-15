<!-- <?php
$con=mysqli_connect('localhost','root','','mydb')
or die('database not connected'.mysqli_error());
$d=$_GET['distid'];
if(!empty($d))
{
	echo $d;
	 function tehsil($d)
						{ 
							$conn=mysqli_connect('localhost','root','','mydb');							
							$sql="select * from tehsil where d_id=$d";
							$result=mysqli_query($conn, $sql)							
							or die('quary not executed'.mysqli_error());
							$data=mysqli_fetch_array($result);
							
							return $result;
						}
	$data1=tehsil($d);
				foreach ($data1 as $value)
				{
					echo"<option value='".$value['id']."'>".$value['t_name']."</option>";
			
				}
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
</head>
<body><div>this is a paragaraph which is fetched from ajax form</div>

</body>
</html> -->
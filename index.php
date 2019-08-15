<?php
echo "this is the home page of my website <br>";



?>


<!DOCTYPE html>
<html>
<head>
	<title>dependent dropdown</title>
</head>
<script src="../jquery.js"></script>
<body>

	<?php
		 function tdata()
						{
							$conn=mysqli_connect('localhost','root','','mydb');							
							$sql='select * from dist';
							$result=mysqli_query($conn,$sql);
							return $result;
						} 	
	?>
	<table align="center">
	<tr>
	   <td>
		<select class="district" name="district">
			<option value="0">Select District</option>
			<?php 
				$data=tdata();
				foreach ($data as $value) 
				{
					echo"<option value='".$value['id']."'>".$value['d_name']."</option>";
			
				}
			 ?>
		</select>
	</td>
	<td>
		<select class="tehsil">
			<option>----------</option>
			<option>Select Tehsil First</option>
			
			
		</select>
	</td>
	<td>
		<select>
			<option>----------</option>
			<option>Select Block First</option>
		</select>
	</td>
	<td>
		<select>
			<option>----------</option>
			<option>Select village First</option>
		</select>
	</td>
	</tr>
</table>

<script>
	$(document).ready(function()
	{
		$(".tehsil").change(function()
		{
			// var t= $(".tehsil").val();
			// alert(t);
			
		});
		
		$(".district").change(function()
		{
			$(".tehsil").html('<option>Select Tehsil</option>');
			var t= $(".district").val();
			tehsil(t);
		});

	});
	function tehsil(t){

			$.ajax(
				{
					url:'ajaxData.php',
					type:'get',
					data:'distid='+t,
					success:function(result){
				$('.tehsil').append(result);
			}});

		};


		
</script>
<div class="data">helllllllo</div>
</body>
</html>






























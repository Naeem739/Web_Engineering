<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM teacher";
	$result=$conn->query($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1> Teachers List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
					<th>Date_of_Birth</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
		
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$desi=$r['designation'];
					$phone=$r['phone'];
					$dob = $r["dob"]; 
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $desi . "</td>";
						echo "<td>". $phone . "</td>";
						echo "<td>". $dob . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'>Delete</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="7"><a href="insertForm.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>





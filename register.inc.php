<?php

require 'connection.php';
$db = new Database();
session_start();
	if(isset($_POST['save']))
	{
		if (!empty($_POST['data_year']) && !empty($_POST['data_private']) && !empty($_POST['data_hire']) && !empty($_POST['data_gov']) && !empty($_POST['data_diplomatic']) && !empty($_POST['data_exempt']))
		{
			$data_year = mysqli_real_escape_string($db->conn, $_POST['data_year']);
			$data_private = mysqli_real_escape_string($db->conn, $_POST['data_private']);
			$data_hire = mysqli_real_escape_string($db->conn, $_POST['data_hire']);
			$data_diplomatic = mysqli_real_escape_string($db->conn, $_POST['data_diplomatic']);
			$data_gov = mysqli_real_escape_string($db->conn, $_POST['data_gov']);
			$data_exempt = mysqli_real_escape_string($db->conn, $_POST['data_exempt']);
			$year = date('Y');

			if ($data_year >= $year) 
			{
				echo '<script>alert("Year is Invalid")</script>';
				header("Refresh: 1; url=/registered_vehicles/index3.php");
			}
			else
			{	        
							$sql = "INSERT INTO `tbl_vehicle_use` (`year`, `private`, `for_hire`, `government`, `diplomatic`, `tax_exempt`) VALUES ('".$data_year."', '".$data_private."', '".$data_hire."', '".$data_diplomatic."', '".$data_gov."', '".$data_exempt."')";
						
							if ($result = $db->conn->query($sql)) 
							{
								header('Location:index2.php');								
							}
							else
							{
								echo "Sorry!";
							}
			}					
		}
		else 
		{
			echo '<script>alert("Incomplete Detais")</script>';
			header("Refresh: 1; url=/registered_vehicles/index3.php");
		}
	}


	?>
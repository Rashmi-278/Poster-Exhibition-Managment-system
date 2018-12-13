<?php
session_start();

if(isset($_POST['submit'])){
				$decision=$_POST['decision'];
				$remark=$_POST['remark'];
				$id=$_POST['id'];

				$jemail=$_SESSION['user'];
					$pid=$_SESSION['pid'];			
				$conn = mysqli_connect('localhost:3306','root','','orbit');
				
				if ($conn->connect_error) {
   				 die("Connection failed: " . $conn->connect_error);
					}
 $sql="INSERT INTO `result`(`pid`, `jemail`, `decision`, `remark`) VALUES ($id,'$jemail','$decision','$remark');";
 $result = mysqli_query($conn,$sql);
				if($result == true){
				echo "<script>
							
							window.location.href='judge.php';
						</script>";
				}
				else{
					echo "
						<script>
						alert('Something went wrong!');
						window.location.href='judge.php';
						</script>
					";	
				}
			}
				?>




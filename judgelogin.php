<?php
session_start();

if(isset($_POST['submit'])){
				$username = $_POST['email'];
				$password = $_POST['password'];	
				$conn = mysqli_connect('localhost:3306','root','','orbit');
			

				if ($conn->connect_error) {
   				 die("Connection failed: " . $conn->connect_error);
					} 

				if($conn){
					$query = "select * from judge where 
					jemail='$username' AND password='$password'";
					$result = mysqli_query($conn,$query);
					if(mysqli_num_rows($result)>0){
						$_SESSION['user'] = $username;
						$_SESSION['pass'] = $password;
						
						
						echo "<script>
							alert('You are authenticated! " .$_SESSION['user'] .   "');
							window.location.href='../judge.php';
						</script>";

					}
					else{
						echo "<script>
							alert('You are not authenticated!');
							window.location.href='../judgelogin.html';
							</script>";
					}
				}

			}
			
?>	

<?php
session_start();
session_destroy();
echo "<script>
							alert('You are logged out ! " .$_SESSION['user'] .   "');
							window.location.href='index.php';
						</script>";
;
?>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orbit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($conn){

 echo "<script>alert(' successfully! connected');</script>";
            if(isset($_POST['submit']))
            {
              $mfname=$_POST['mfname'];
              $mlname=$_POST['mlname'];
              $co1fname=$_POST['co1fname'];
              $co1lname=$_POST['co1lname'];
              $co2fname=$_POST['co2fname'];
              $co2lname=$_POST['co2lname'];
              $cemail=$_POST['cemail'];
              $cnumber=$_POST['cnumber'];
              $daffil=$_POST['daffil'];
              

              $query = "SELECT pid FROM posters  WHERE pid = (SELECT max(pid) FROM posters) ORDER BY pid DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                        $pid = $row['pid']; 
                      }


           
            $sql = "INSERT INTO graphicd( fname, lname, affil, pid) VALUES ('$mfname','$mlname','$daffil','$pid')";
            if ($conn->query($sql) === TRUE) {
                
               
            } else {
                echo "Error 1: " . $sql . "<br>" . $conn->error;
            }
            $query = "SELECT gid FROM graphicd  WHERE gid = (SELECT max(gid) FROM graphicd) ORDER BY pid DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                        $last_gid = $row['gid'];
                        $_SESSION['gid']=$last_gid;
                        $sql = "INSERT INTO maind( gid ,memail, phno) VALUES ($last_gid,'$cemail',$cnumber)";
              if ($conn->query($sql) === TRUE) {
                 

            } else {
                echo "Error 2: " . $sql . "<br>" . $conn->error;
            }

              $sql = "INSERT INTO graphicd( fname,lname,affil, pid) VALUES ('$co1fname','$co2lname','$daffil','$pid')";
              if ($conn->query($sql) === TRUE) {
                 
            } else {
                echo "Error 3: " . $sql . "<br>" . $conn->error;
            }
              $sql = "INSERT INTO graphicd(fname,lname,affil,pid) VALUES ('$co2fname','$co2lname','$daffil','$pid')";
              if ($conn->query($sql) === TRUE) {
                echo "<script>
                alert('  Registered successfully! Registerion ID:  " .$_SESSION['gid'] .   "');
                window.location.href='../index.php';</script>";
            } else {
                echo "Error 4: " . $sql . "<br>" . $conn->error;
            }
              


                } 
                
                
                     
}


}
$conn->close();
session_destroy();
?>

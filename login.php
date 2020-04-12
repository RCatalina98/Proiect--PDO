<?php
//try to inject :  ' or 1=1--
// Connect to server and select database.
$con=mysqli_connect('localhost', 'root', '', 'test') or die("Failed to connect: ". mysqli_error($con));
// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql="SELECT * FROM test WHERE username='$myusername' and password='$mypassword'";
$result = mysqli_query($con,  $sql )or die("!!!!!!!!!!!!!!!!");
$count=mysqli_num_rows($result);
if($count){  
     // Get results
    while( $row = mysqli_fetch_assoc( $result ) ) {
        // Get values
        $id= $row["id"];
        $username = $row["username"];
        $password  = $row["password"];
        // Feedback for end user
        echo "<pre>ID: {$id}<br />Username: {$username}<br />Password: {$password}</pre>";
    }
      echo "Login Successful<br/><br/>";
      echo "<a href='logout.php'>Logout</a>";
}else{
    echo "Wrong Username or Password";
}
?>

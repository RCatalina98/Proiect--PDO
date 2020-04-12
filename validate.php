<!DOCTYPE HTML>
<html>

<head>
  <title>Sign In</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>  
<body>
 <?php
$myemail="catalina@yahoo.com";
$mypass="1998";
$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
   
    if(($email == $myemail)&&($pass==$mypass)&&($_POST['captcha']==$_POST['correctsum']) ){
        if(!isset($_POST['captcha'])){
            $message.='enter captcha...</br>';
             }
        if( isset($_POST['remember'])){
             setcookie('email', $email , time()+60*60*7);
             setcookie('pass', $pass , time()+60*60*7);
        }
        
       
    
        session_start();
        $_SESSION['email']=$email;
        header("location:sale.php");
    }else{
        echo "Email or Password or sum is Invalid.<br> click here <a href='admin.php'> to try again </a> ";
    }
}else {
    header("location:admin.php");
}
?>
      
</body>
</html>
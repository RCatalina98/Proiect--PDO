     
 <?php

$myemail="admin@yahoo.com";
$mypass="12345";
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
        header("location:welcome.php");
    }else{
        echo "Email or Password or sum is Invalid.<br> click here <a href='another_page.php'> to try again </a> ";
    }
}else {
    header("location:sale.php");
}
?>
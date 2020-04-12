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
            $number1=rand(1,9);
            $number2=rand(1,9);
            $sum=$number1+$number2;
        ?>
        <!--remember pass-->
       <form name="form" method="post" action="valid.php">
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr>
            <td align="center" colspan="2">Sign In</td>
        </tr>
        <tr>
            <td align="right">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td align="right">Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td align="right"><input type="hidden" name="correctsum" value="<?php echo $sum;?>"><?php echo $number1.'+'.$number2.'=';?></td>
            <td><input type="text" name="captcha"></td>

        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td>
        </tr>
        
        <tr>
            <td align="center" colspan="2"><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form> 
        
        <?php
        if((isset($_COOKIE['email']))&&(isset($_COOKIE['pass']))){
       $email=$_COOKIE['email'];
       $pass=$_COOKIE['pass'];
        echo "<script>
     document.getElementById('email').value='$email';
     document.getElementById('pass').value='$pass';
</script>";
       
        }
        ?>
        <!--end remember-->
        
       
        
    </div>
    
  </div>
  
</body>
</html>

<!DOCTYPE HTML>
<html>

<head>
  <title>EDIT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  
    
   <?php
       //include connection file
        include 'Connection.php';
$sqll1="DROP PROCEDURE editImage";
$sqll2="CREATE PROCEDURE images.editImage
(
in strTitle varchar(30),
in strImage varchar(100),
in strId int
)
begin 
update images.images set title=strTitle,image=strImage where id=strId;
end;";
$c1=$con->prepare($sqll1);
$c2=$con->prepare($sqll2);
$c1->execute();
$c2->execute();
        if(!isset($_POST["submit"])){
            
$sql="SELECT * FROM images.images WHERE ID='{$_GET['id']}'";
            $result=$con->query($sql);
            $record=$result->fetch();                                         
        }else{
 $sql2="SELECT * FROM images.images WHERE ID='{$_POST['id']}'"; 
           $result2=$con->query($sql2);
            $rec=$result2->fetch();
             $result2->setFetchMode(PDO::FETCH_ASSOC);
            $title=$_POST['title'];
            
           if(isset($_POST['image'])){
           $target="./images/".basename($_FILES['image']['name']);
           }else{
           $target=$rec['image'];
           echo $target;
           } 
           
           $sqlp="CREATE TRIGGER after_edit AFTER UPDATE ON images.images FOR EACH ROW
                BEGIN
                INSERT INTO images.images_updated(title,status,edtime)VALUES(NEW.title,'UPDATED',NOW());
                END;
                ";
            $stmt=$con->prepare($sqlp);
        $stmt->execute();
         
             $sql1="call editImage('{$title}','{$target}','{$_POST['id']}')";
            $con->query($sql1);

        move_uploaded_file($_FILES['image']['tmp_name'],$target);
          header('Location:sale.php');
      
        }
 ?>
    
    
<h1>Edit:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    Title:<br/><input type="text" name="title" value="<?php echo $record['title'] ;?>"/><br/>
    Image: <br/><input type="file" name="image" value="<?php echo $record['images'] ;?>"><br/>
    <img src="<?php echo $record['images'] ;?>"><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="submit" name="submit" value="Edit"/>
</form>
</body>
</html>
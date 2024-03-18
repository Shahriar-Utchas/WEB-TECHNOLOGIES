<?php 
    include("database.php");
    session_start();
    if(empty($_SESSION['id'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <?php 
    $id=$_SESSION['id'];
    $sql="select * from user where ID= $id";
    $result =mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $name = $result["Name"];
    $mail = $result["Email"];
    $pass = $result["pass"];
    $dob = $result["DOB"];
    $gender = $result["gender"];
    ?>
    <h1>Welcome <?php echo $name ?> </h1>
     <h3>Here is your Information</h3>
     Name: <?php echo $name ?> <br>
     ID:  <?php echo $id ?> <br>
     E-mail: <?php echo $mail ?> <br>
     Password: <?php echo $pass ?> <br> 
     Gender: <?php echo $gender ?> <br> 
     Date of Birth: <?php echo $dob ?> <br> <br>
     <form method="GET">
     <button name="out">Logout</button>
     <button name="edit">Edit</button>
     <button name="delete">Delete Account!</button>
     </form>
     <?php 
        if(isset($_GET["out"])){
            session_destroy();
            header("location:login.php");
        }
        elseif(isset($_GET["delete"])){
            ?>
            <br> <?php  echo"Are You sure?"; ?> 
            <form method="GET">
            <button name="yes">Yes</button>
            <button name="no">No</button> <br>
            </form>
            <?php
        }
        elseif(isset($_GET["edit"])){
        ?>
        <form method="POST">
           <br>Enter Your New Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="new_name"> <br>
           <br>Enter Your New ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="number" name="new_id"> <br>
           <br>Enter Your New E-mail&nbsp&nbsp&nbsp&nbsp: <input type="Email" name="new_mail"> <br>
           <br>Enter Your New Password: <input type="password" name="new_pass"> <br><br>
           <input type="submit" name ="save" value="Save">
           </form>
        <?php
        if(isset($_POST["save"])){
            if(empty($_POST["new_name"]) && empty($_POST["new_id"]) && empty($_POST["new_mail"]) && empty($_POST["new_pass"])){
                echo"Please Fill up what you want to Change!";
            }else{
                if(!empty($_POST["new_name"])){
                    $new_name = $_POST["new_name"];
                    $nameSql="UPDATE user SET Name='$new_name' WHERE ID =$id";
                    mysqli_query($conn,$nameSql);
                    header("location:home.php");
                }
                }
                if(!empty($_POST["new_id"])){
                   $new_id = $_POST["new_id"];
                   $idSql="UPDATE user SET ID = $new_id WHERE ID =$id";
                   try{
                       mysqli_query($conn,$idSql);
                       $_SESSION['id'] =$new_id;
                       header("location:home.php");
                   } 
                   catch(mysqli_sql_exception){
                    echo "ID already exist!!";
                    }                  
                }
                if(!empty($_POST["new_mail"])){
                   $new_mail = $_POST["new_mail"];
                   $mailSql="UPDATE user SET Email ='$new_mail' WHERE ID =$id";
                   mysqli_query($conn,$mailSql);
                   header("location:home.php");
                }
                if(!empty($_POST["new_pass"])){
                    $new_pass = $_POST["new_pass"];
                   $passSql="UPDATE user SET pass ='$new_pass' WHERE ID =$id";
                   mysqli_query($conn,$passSql);
                   header("location:home.php");
                }
            }
        }
        
        if(isset($_GET["yes"])){
                $deleteSQL ="DELETE FROM user WHERE ID =$id";
                mysqli_query($conn,$deleteSQL);
                header("location:login.php");
        }
     ?>
</body>
</html>

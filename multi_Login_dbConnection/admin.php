<?php 
    include("database.php");
    session_start();
    if(!($_SESSION['admin'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
   <h1>Wellcome Admin!</h1>
    <br> 
    <h3>Registation User Details:</h3>
    <?php 
    $sql="select * from user"; 
    $result = mysqli_query($conn,$sql)
    ?>

    <form method="POST">      
        <table border ="1">
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>E-mail</th>
               <th>Password</th>
               <th colspan="2">Option</th>
           </tr>
           <?php while($r=mysqli_fetch_assoc($result)){ ?>
           <tr>
                <td><?php echo $r["ID"]; ?></td>
                <td><?php echo $r["Name"]; ?></td>
                <td><?php echo $r["Email"]; ?></td>
                <td><?php echo $r["pass"]; ?></td>
                <td><button name="delete" value="<?php echo $r["ID"] ; ?>">Delete</button></td>
           </tr>
           <?php } ?>
        </table>
    </form>

    <form>
        <br>
        <button name="out">Logout</button>
    </form>
    <?php 
    if(isset($_GET["out"])){
        header("location:login.php");
        $_SESSION['admin'] =false;
    }
    if(isset($_POST["delete"])){
        $id= $_POST["delete"];
        $deleteSQL ="DELETE FROM user WHERE ID =$id";
        mysqli_query($conn,$deleteSQL);
        header("location:admin.php");
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <form action="" method ="post">
        Name: <br>
        <input type="text" name="user"><br>
        ID: <br>
        <input type="number" name="id"><br>
        E-mail: <br>
        <input type="Email" name ="mail"><br>
        Password: <br>
        <input type="password" name ="pass"><br>
        <input type="submit" name="register" value ="Register">
        <button><a href="Login.php">Log In</a></button>
    </form>
   <?php
    include("database.php"); 
    if(isset($_POST['register'])){

        if(!empty($_POST['user']) && !empty($_POST['id']) && !empty($_POST['mail']) && !empty($_POST['pass'])){
            $user = $_POST['user'];
            $id = $_POST['id'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            
            $sql ="INSERT INTO user (Name, ID, Email, pass) VALUES ('$user', '$id', '$mail', '$pass')";
            try{
                mysqli_query($conn, $sql);
                echo "User Registered!<br>";
            }
            catch(mysqli_sql_exception){
                echo "Couldn't Register! <br>";
            }

        } else {
            echo "Form fields are missing!";
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>

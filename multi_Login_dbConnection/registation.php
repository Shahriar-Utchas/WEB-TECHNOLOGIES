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
        Date of birth: <br>
        <input type="date" name ="dob"><br> <br>
        Gender:
        <input type="radio" name ="gender" value="male">Male
        <input type="radio" name ="gender" value="female">Female<br> <br>
        <input type="submit" name="register" value ="Register">
        <button><a href="Login.php">Log In</a></button>
    </form>
   <?php
    include("database.php"); 
    if(isset($_POST['register'])){

        if(!empty($_POST['user']) && !empty($_POST['id']) && !empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['dob']) && !empty($_POST['gender'])){
            $user = $_POST['user'];
            $id = $_POST['id'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            
            $sql ="INSERT INTO user (Name, ID, Email, pass, DOB, gender) VALUES ('$user', '$id', '$mail', '$pass', '$dob', '$gender')";
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

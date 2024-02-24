<!DOCTYPE html>
<html lang="en">
<head>
    <title>Isset And Empty Pactice</title>
</head>
<body>
    <form action="" method ="post">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login" name="Login"><br><br>
    </form>

    <?php
    if(isset($_POST["Login"])){
        if(empty($_POST["username"])){
            echo "Username is Empty <br>";
        }
        elseif(empty($_POST["password"])){
            echo "Password is Empty <br>";
        }else{
            foreach($_POST as $key => $value){
                echo "{$key}: {$value}"."<br>";
            }
        }
    }
    ?>
</body>
</html>
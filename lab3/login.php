<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
        <h1 style="color: green;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h1>
        <form method="post" >
            <label for="uname" style="color: blue;">Username:</label>
            <input type="text" id="uname" name="uname">
            <br><br>
            <label for="pass" style="color: red;">Password:</label>
            <input type="password" id="pass" name="pass">
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="log" style="color: green;">Login</button>
            &nbsp;&nbsp;
            <button style="color: blue;"><a href="registation.php">Registation</a></button>
        </form>

    <?php
    if(isset($_POST['log'])) {
        if(empty($_POST['uname'])) {
            echo "<br> <br> Username is empty";
        } else {
            if(empty($_POST['pass'])){
                echo "<br> <br> Password is empty";
            } else {            
                echo "<br> <br> Login Successful";
            }
        }
    }
    ?>
</body>
</html>

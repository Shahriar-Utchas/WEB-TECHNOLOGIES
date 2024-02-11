<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registation</title>
</head>
<body>
<div>
<h1 style="font-family: Aharoni; color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration</h1>

        <form method="post">
            <label for="fname">Enter Your Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="text" id="fname" name="fullname">
            <br><br>
            <label for="phn">Enter Your Phone Number:</label>
            <input type="number" id="phn" name="phnNum">
            <br><br>
            <label for="pass" style = "color:tomato">Enter Your Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="password" id="pass" name="pass">
            <br><br>
            <label for="Rpass" style = "color:red">Retype Your Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="password" id="Rpass" name="Rpass">
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" name="reg" style ="color:blue">Confirm Registation</button>
            &nbsp;&nbsp;
            <button><a href="login.php">Login</a></button>
        </form>
    </div>
    <?php
    if(isset($_POST['reg'])) {
        if(empty($_POST['fullname'])) {
            echo "<br> <br> Enter Your Name!";
        }
        elseif(empty($_POST['phnNum'])) {
            echo "<br> <br> Enter Your Phone Number!";
        }
        elseif(empty($_POST['pass'])) {
            echo "<br> <br> Enter Your Password!";
        }
        elseif(empty($_POST['Rpass'])) {
            echo "<br> <br> Retype Your Password!";
        }
        
        else {          
           
                echo " <br> <br> Registation Successful";
            
        }
    }
    ?>
</body>
</html>
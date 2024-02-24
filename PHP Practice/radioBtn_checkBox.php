<!DOCTYPE html>
<html lang="en">
<head>
    <title>Radio Button And Checkbox</title>
</head>
<body>
    <form action="" method ="post">
        <input type="checkbox" name ="food1" value ="pizza" >pizza <br>
        <input type="checkbox" name ="food2" value ="Burger">Burger <br>
        <input type="checkbox" name ="food3" value ="HotDog">HotDog <br>
        <input type="submit" name="submit2">
    </form>
    <?php
        if(isset($_POST["submit2"])) {
            if(empty($_POST["food1"]) && empty($_POST["food2"]) && empty($_POST["food3"]) ){
                echo "Please make a selection!<br>";
            }else{
                if(isset($_POST["food1"])){
                    echo "You Selected Pizza <br>";
                }
                if(isset($_POST["food2"])){
                    echo "You Selected Burger <br>";
                }
                if(isset($_POST["food3"])){
                    echo "You Selected HotDog <br>";
                }
            }
        } 
     ?>
    <br><br>
    <form action="" method ="post">
        <input type="radio" name ="payment" value="Visa"> visa <br>
        <input type="radio" name ="payment" value="Paypal">
        Paypal <br>
        <input type="radio" name ="payment" value="Nagad">
        Nagad <br>
        <input type="submit" name="submit">
    <?php
        if(isset($_POST["submit"])) {
            if(isset($_POST["payment"])){
                $credit = $_POST["payment"];
                echo " <br> You Selected " . $credit;
            }
            else{
                echo "<br> Please make a selection!";
            }
        }        
     ?>
    </form>  
</body>
</html>
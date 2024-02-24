<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative Array</title>
</head>
<body>
    <form action="" method="post">
        Country: <input type="text" name ="city">
        <input type="submit" name="submit">
        <button name ="all">All</button>
    </form>
    <?php 
    $countries = array("USA"=>"WASHINGTON D.C","BD"=>"DHAKA","INDIA"=>"DELHI","JAPAN"=>"TOKYO");

    if(isset($_POST["submit"])){
        if(empty($_POST["city"])){
            echo"please input <br>";
        }
        else{
            $capital=$_POST["city"];
            echo "{$capital}'s capital is {$countries[$capital]}";
        }
    }
    if(isset($_POST["all"])){
        foreach($countries as $country => $capital){
            echo "<br>"."{$country}'s capital is {$capital}". "<br>" ;
        }
    }
    ?>
</body>
</html>

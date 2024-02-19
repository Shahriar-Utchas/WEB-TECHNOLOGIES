<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datbase Connection</title>
</head>
<body>
    <?php
        $serverName = "localhost";
        $userName = "root";
        $pass = "";
        $dbname = "lab4";
        $conn = new mysqli($serverName, $userName, $pass, $dbname);
        $sql = "select * from info";
        $rel = mysqli_query($conn, $sql);
        $rel2 = mysqli_query($conn, $sql);
        while($r = mysqli_fetch_assoc($rel)){
            echo $r["Name"];
            echo"<br>";
        }
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php while($r = mysqli_fetch_assoc($rel2)) { ?>
            <tr>
                <td><?php echo $r["ID"]; ?></td>
                <td><?php echo $r["Name"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

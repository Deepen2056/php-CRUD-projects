<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Contact Informations</h1></header>
    <form action="appdata.php" method="post">
        <div class="main">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name"required><br>
            <label for="contact">Phone no:</label><br>
            <input type="number" name="contact" id="contact"><br><br>
            <input type="submit" value="save">
        </div>


    </form>
    <hr>
    <hr>
    <table>
        <caption><b>Contact list</b></caption>
        <tr>
        <th>Name</th>
        <th>Phone No:</th>
        <th>Actions</th>
        </tr>
        <?php
        include 'db.php';
        $sql = "SELECT * FROM names";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];
                ?>
                <tr>
                    <td><?php echo $name?></td>
                    <td><?php echo $phone?></td>
                    <td><a href="delete.php ?id=<?php echo $id ?>">Delete</a>
                    <a href="edit.php ?id=<?php echo $id ?>">update</a>
                    </td>
                </tr>
                <?php

            }
        }
        
        ?>
    </table>
    
</body>
</html>
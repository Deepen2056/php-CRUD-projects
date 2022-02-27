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

    <h2>update contact</h2>
    <?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM names where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);{
            $name = $row['name'];
            $phone = $row['phone'];
        }
    }


    ?>


    <form action="edit1.php" method="post">
        <div class="main">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="<?php global$name;echo $name ?>"><br>
            <label for="contact">Phone no:</label><br>
            <input type="number" name="contact" id="contact" value="<?php global$phone;echo $phone ?>"><br><br>
            <input type="hidden" name="id" id="id" value="<?php global$id;echo $id ?>">
            <input type="submit" value="update">
        </div>


    </form>
    
</body>
</html>
<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="POST">
        Name: <input type="text" name="name"><br><br>
        Course: <input type="text" name="course"><br><br>
        <button type="submit" name="save">Save</button>
    </form>
    <?php
    if(iset($_POST['save'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $sql = "INSERT INTO students (name, course)
        VALUES ('$name', '$course')";
        mysql_query($conn, $sql);
        header("Location: add.php");
    }
    ?>
</body>
</html>
<?php
    session_start();
    if ($_SESSION['email'] == true ){
        echo "<h1>welcome! $_SESSION[email] </h1>";
    }
    else {
        header("location:newlogin.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <a href="logout.php">log out</a>
    
</body>
</html>
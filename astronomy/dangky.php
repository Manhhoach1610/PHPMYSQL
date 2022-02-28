<?php 
    session_start();
    if ($SESSION['name'] == "") {
        header('location:register.php');
    } else {
        echo "<h1>Heluuuu, chào mừng bạn" .$_SERVER['name']. "đến với thế giới của tôi</h1>";
    }
    if ($SESSION['users'] == "") { 
        // nếu chưa có user thì sẽ gọi đến trang login
        header('Location:login.php'); 
    } else {
        echo "<h1>Helluuu, rất chào bạn " .$_SESSION['users']."<a href='logout.php'>Logout</a>" ."</h1>";
    }


?>
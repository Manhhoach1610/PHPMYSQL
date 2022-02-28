<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div id="container">
            <h2 class="thongbao">Lấy lại mật khẩu</h2>
            <input type="text" name="txtusers" placeholder="Enter your username">  
            <input type="email" placeholder="Enter your email" name="txtemail"> 
            <input type="submit" id="login" value="Login" name="sbm" sonclick="thongbao()">
            <a href="forgot_password.php">Forgot Password</a>
        </div>
    </form>
    
    <?php 
    session_start();
    require('control.php'); 
    $getdata = new Data(); 
    if (isset($_POST['sbm'])) {
        if (empty($_POST['txtusers']) || empty($_POST['txtpassword'])) {
            echo "<p>Please fill all the fields</p>";
        } else {
            $login = $getdata->login($_POST['txtusers'], $_POST['txtpassword']);
        if ($login == 1) {
            $_SESSION['users'] = $_POST['txtusers'];
            header('location: admin.php');
            // echo "<p>Login successful</p>";
        } else {
            echo "<p>Login fail</p>";
        }
        }
       
    }

    ?>
</body>
</html>
<?php
    
    require("Connection1.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/Admin_Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login_form">
        <h2>Admin Panel</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin Name" name="AdminName">
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Admin Password" name="AdminPassword">
            </div>

            <Button type="submit" name="Signin">Sign In</Button>
            <div class="extra">
                <a href="">Forgot Password</a>
            </div>
        </form>
    </div>

    <?php

        if(isset($_POST['Signin']))
        {
            $query="SELECT * FROM `admin_login` WHERE 'Admin_Name'='$_POST[AdminName]' AND 'Admin_Password'='$_POST[AdminPassword]'";
            
            $result=mysqli_query($con,$query);

            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['AdminLoginId']=$_POST['AdminName'];
                header("location:Admin_Panel.php");
            }
            else
            {
                echo "<script>alert('Incorrect Password');</script>";
            }
        }
    ?>
    
</body>
</html>
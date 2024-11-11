<?php
  include("connection.php");
 Session_Start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>COVID TEST</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>

    /* Full-page background image */
    body 
    {
        width: 100%;
        height: 100vh;
        background: url("admin/img/hero-bg.png") ;
        background-size: 100% 90%;
        background-position: 0% 0% 150%;
        background-repeat: no-repeat;
        display: flex;
    }
</style>
<body>
<img src="img/hero-bg.png" alt="Sample Image">
    <section class="main">
        <div class="form">
            <h2>Admin Login</h2>
            <form method="post" autocomplete="off">
                <input type="email" placeholder="Enter Email Address"name="email"required><br><br>
                <input type="Password" placeholder="Enter Password"name="password"required><br><br>
                <input type="Submit" Value="Login" name="submit"><br><br>
            </form>
            <?php
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
                $query = "SELECT * FROM tbl_admin WHERE email='$email' and password='$password'";
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) 
                {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['admin_session'] = $row['id'];
                    echo 
                    "<script>alert('Login successful'); window.location.href='admindex.php';</script>";
                } 
                else
                {
                    echo
                "<script>
                alert('incorrect Email or password);
                </script>";

            }
        }

        ?>
    </div>
    </section>
</body>
</html>

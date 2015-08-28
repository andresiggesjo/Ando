<?php
include('login.php'); // Includes Login Script


if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Twittsters</title>

    <link rel="stylesheet" href="erdem.css">

</head>

<body>


    <div id="main">

        <div id="login">
            <h1>TWITTSTERS</h1>
            <form action="" method="post">

                <input id="name" name="username" placeholder="Username" type="text">

                <input id="password" name="password" placeholder="Password" type="password">
                <input name="submit" type="submit" value="Login">

                <input name="signup" type="submit" value="Signup">
                <?php
                    if (isset($_POST['signup'])) {
                        header("location: signup.php"); 
    
                            }
                        ?>

                    <span><?php echo $error1; ?></span>

            </form>
        </div>



    </div>
</body>

</html>
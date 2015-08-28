<?php
include('registration.php'); // Includes Registration script
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
                <h2>TWITTSTERS</h2>
                <form action="" method="post">

                    <input id="name" name="username" placeholder="Username" type="text">

                    <input id="password" name="password" placeholder="Password" type="password">

                    <input name="signup" type="submit" value="Register">
                    <span><?php echo $errorss; ?></span>
                    <span><?php echo $error; ?></span>
                    <p>
                        Follow this
                        <a href='http://localhost/twit/index.php'>link</a> after you created an account to log in!
                    </p>
                    <span><?php echo $errors; ?></span>
                </form>
            </div>



        </div>
    </body>

    </html>
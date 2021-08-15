<?php
include_once 'nav.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Signup</title>
</head>
<body>
<section class="signup-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Sign Up</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="login.inc.php" method="post">
                    <input type="email" name="email" value="" placeholder="Email">
                    <input type="password" name="name" value="" placeholder="Password">
                    <button type="submit" name="submit">Login/button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>


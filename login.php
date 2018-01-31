<?php  ?>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/col.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">


</head>
<body>
<?php  include('header.php'); ?>
    

<div class="container top-margin-page">
    <div class="l6 m6 s12 x12 xs12">
        <form action="connection.php" method="post">
            <h2 class="dark-magenta"> Student Login</h2>
            <label class="l3 m3 s3 x3 xs3 dark-magenta align-label" for="username">Username</label>
            <input class="l9 m9 s9 x9 xs9" type="text" id="username" name="username" placeholder="Enter Username">
            
            <label class="l3 m3 s3 x3 xs3 dark-magenta align-label" for="passwod">Password</label>
            <input class="l9 m9 s9 x9 xs9" type="password" id="pass" name="password" placeholder="Enter Passowrd">
        
            <button id="login" type="submit" value="Submit"> Login </button>
        </form>
    </div>

    <div class="l6 m6 s12 x12 xs12">
        <?php //include('login_page_animation.php') ?>
    </div>

</div>


<?php include('footer.php'); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>How to set up WordPress</title>
</head>

<body>

<?php   include('../fragments/header.php');    ?>
<?php   include('../fragments/nav-bar.html');    ?>
    <h1>Setting up WordPress</h1>

    <h2>Step 1</h2>
    <p>Make a folder called Wordpress </p>

    <h2>Step 2</h2>
    <p>Download and unzip WordPress into this folder (get wordpress from <a href="https://wordpress.org/download/">here</a>)</p>

    <h2>Step 3</h2>
    <ol>
        <li>Set up mysql database</li>
        <li>Open phpmyadmin and logon</li>
        <li>Go to users</li>
        <li>Created a new user</li>
        <li>Enter username and password</li>
        <li>Don't forget to check 'create database with same name'</li>
        <li>Press 'go'</li>
        <img src="../images/mysqp_add_user.jpg" alt="">
    </ol>

    Step 4
    <ol>
        <li>open 'WordPress' folder in brackets </li>
        <li>open wp-config-sample.php </li>
        <li>change username, database, password</li>
        <img src="../images/username-database-password.jpg" alt="">
        <li>save </li>
        <li>rename wp-config-sample.php to wp-config.php </li>
    </ol>

    <h2>Step 5</h2>
    <p>browse to localhost/wordpress</p>

    <h2>Step 6</h2>
    <p>Open a cold one </p><img src="../images/cold-beer.jpg" alt="">


<?php   include('../fragments/footer.php'); ?>
</body>

</html>

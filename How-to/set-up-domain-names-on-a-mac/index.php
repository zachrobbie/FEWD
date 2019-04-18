<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>set up hosts file</title>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
</head>

<body>
   <? php   include('../fragments/header.php');    ?>
<? php   include('../fragments/nav-bar.html');    ?>
    <a href="../">back</a>
    <h1>set up /etc/hosts file on a Mac</h1>
    <p>The hosts text file acts like a mini personal Domain Name Server (DNS) </p>
    <p>When you type an address into Chrome it will look in 'hosts' first.</p>
    <h2>Steps:</h2>
    <ul>
        <li>open utilities/terminal</li>
        <li>type sudo nano /etc/hosts and hit 'return'
            <ul>
                <li>'sudo' means you are SUperuser and can DO things for a short while</li>
                <li>'nano' is a really old text-based editor</li>
                <li>'/etc/hosts' means we're editing the 'hosts' text file in the '/etc' directory</li>
            </ul>
        </li>
        <li>enter password when asked</li>
        <li>use cursor keys (the mouse won't work!) and move the cursor to a new line</li>
        <li>type 127.0.0.1 for your machine and then either tab or space</li>
        <li>type your domain name eg noodles.com
            <ul>
                <li>You should have something like this:</li>
                <li>127.0.0.1 noodles.com</li>
            </ul>
        </li>
        <li>ctrl-o to save</li>
        <li>ctrl-x to exit</li>
        <li>flush the Mac cache by typing one of these at the terminal:
            <ul>
                <li>sudo killall -HUP mDNSResponder (hit return)</li>
                <li>sudo dscacheutil -flushcache (hit return)</li>
            </ul>
        </li>
        <li>open a new tab on your browser and type noodles.com</li>
    </ul>
<?php   include('../fragments/footer.html'); ?>
</body>

</html>

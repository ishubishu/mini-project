<?php 
 
 session_start();
 
 
?>
<html>
    <head>
        <title> HOME PAGE </title>
    </head>
    <body>
        <a href="logout.php">Logout</a>
       <h1> Welcome  <?php echo $_SESSION['username']; ?></h1>
       <form method="post" action="contact.php">
    <p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
    </p>
    
    <p>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" cols="30"></textarea>
    </p>
    <p>
        <input type="submit" name="send" value="Send message" />
    </p>
</form>
       
    </body>
 </html>

<!DOCTYPE html>

<html>

<?php
    include 'header.php';
    include 'navigation.php';
    include 'logo.php';

?>
   

   
    
    
    
    
    <body>
    <form action="submit-contact.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <br><br>
            <input type="text" name="date" placeholder="Date">
            <br><br>
            <input type="date" name="email" placeholder="Email Address">
            <br><br>
            <input type="text" name="work" placeholder="What can I do for you?">
            <br><br>
            <button type="submit" name="Submit">Contact me</button>
            
            

    </form>
        

    </body>
</html>
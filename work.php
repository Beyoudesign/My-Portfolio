<!DOCTYPE html>

<html>

<?php
    include 'header.php';
    include 'navigation.php';
    include 'logo.php';

?>
   <body>
   <?php
    function getPostDetailsFromDatabase()
    {
        // Get the post that matches the postTitle
        include_once './dbh.inc.php'; // Connect to the database
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);

        // Get the first row from the result as an associative array. Check out the titles function in the module to figure out how to show all posts.
        $postDetails = mysqli_fetch_assoc($result);
        return $postDetails;
    }
    ?>
    <?php
    // Post details contains all the data to generate the blog from
    $postDetails = getPostDetailsFromDatabase();
    ?>
    <div style="color:#ffffff">
        <h1> <?php echo $postDetails["title"]; ?> </h1>
        <div> <?php echo $postDetails["author"]; ?> </div>
        <div> <?php echo $postDetails["date"]; ?> </div>
        <div> <?php echo $postDetails["content"]; ?> </div>
    </div>     

   </body>
</html>

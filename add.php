<html>
<head>
    <title>Add</title>
</head>
    <a href="index.php">Go to Home</a>
    <form action="add.php" method="post" name="form1">
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Topic</td>
                <td><input type="text" name="topic"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="date"></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="add_btn" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    
    //check if from submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $title = $_POST['title'];
        $topic = $_POST['topic'];
        $date = $_POST['date'];
    
        //include database connection file
        include_once("adminDB.php");
    
        //insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO news(title,topic,date) VALUES('$title','$topic','$date')");
    
        if($result) {
            //show message when user added
            //echo "<div id='message'>New post added successfully. <a href='index.php'>View Posts</a></div>";
            header("Location: index.php");
        } else { echo "Error: " . mysqli_error($mysqli);}
    }
    
    ?>
    
</html>
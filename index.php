<?php
include_once("donationDB.php");
 
$result = mysqli_query($mysqli, "SELECT SUM(num) AS num_sum FROM donations");
?>

<html>
<head>
    <title>Admin</title>
</head>
    <?php
                
        while($donation_data = mysqli_fetch_assoc($result)) {
            echo "$".$donation_data['num_sum'];
        }

    ?>

    <a href="donation.php" id="don_btn">Donate Now</a>
</html>
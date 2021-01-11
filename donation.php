<?php
    
    if (isset($_POST['Donate'])) {
        $cname = $_POST['cardname'];
        $cnumber = $_POST['cardnumber'];
        $cexpiremonth = $_POST['expmonth'];
        $cexpireyear = $_POST['expyear'];
        $ccvv = $_POST['cvv'];
        $amount = $_POST['amount'];

        include_once("donationDB.php");

        $result = mysqli_query($mysqli, "INSERT INTO donations(cardname,cardnumber,expmonth, expyear, cvv, amount) VALUES('$cname','$cnumber','$cexpiremonth', '$cexpireyear', '$ccvv', '$amount')");

        if($result) {
            header("Location: index.php");
        } else { echo "Sorry, " . mysqli_error($mysqli); }
    }

    ?>
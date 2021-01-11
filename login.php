<?php

    session_start();

    if (isset($_POST['Login']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
        if ($_POST['user'] == 'admin@dsf.ca' && $_POST['pass'] == 'dummypass1') {
            $_SESSION['user'] = 'admin@dsf.ca';
            
            header("Location: ../Admin/index.php");
        } else {
            echo 'username or password is incorrect';
        }
    }
?>
<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location:../view/homepage_before.view.php");

?>

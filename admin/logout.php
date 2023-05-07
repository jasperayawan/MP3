<?php
    require('../admin/essentials.php');

    session_start();
    session_destroy();
    redirect('../admin/index.php')
?>
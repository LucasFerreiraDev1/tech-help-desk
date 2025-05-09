<?php
    session_start();

    if(!isset($_SESSION['session_authenticate']) || $_SESSION['session_authenticate'] != 'YES') {
        header('Location: ../index.php?login=error_session');
    }
?>
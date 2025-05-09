<?php
    session_start();

    $registerBD = fopen('./login.php', 'a');

    $title = str_replace('#', '-', $_POST['title']);
    $category = str_replace('#', '-', $_POST['category']);
    $description = str_replace('#','-',$_POST['description']);

    $text_register = $_SESSION['user_id'].'#'.$title.'#'.$category.'#'.$description.PHP_EOL;

    fwrite($registerBD, $text_register);
    fclose($registerBD);

    header('Location: ./open_ticket.php');
?>
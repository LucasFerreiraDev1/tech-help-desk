<?php 
    session_start();

    $authenticate = false;
    $user_id = null;
    $permission_id = null;

    $permission = ['admin' => 1, 'user' => 2];
    $users_app = [
        ['id' => 1, 'email' => 'adm@email.com', 'password' => '1234', 'permission_id' => 1],
        ['id' => 2, 'email' => 'LuksDevs@email.com.br', 'password' => '12345', 'permission_id' => 1],
        ['id' => 6, 'email' => 'user01@email.com', 'password' => '1234', 'permission_id' => 2],
        ['id' => 7, 'email' => 'user02@email.com', 'password' => '1234', 'permission_id' => 2],
        ['id' => 8, 'email' => 'user03@email.com', 'password' => '1234', 'permission_id' => 2],
        ['id' => 9, 'email' => 'user04@email.com', 'password' => '1234', 'permission_id' => 2],

    ];

    foreach($users_app as $users) {
        if($_POST['email'] == $users['email'] && $_POST['password'] == $users['password']){
            $authenticate = true;
            $user_id = $users['id'];
            $permission_id = $users['permission_id'];
        }
    }

    if($authenticate) {
        $_SESSION['session_authenticate'] = 'YES';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['permission_id'] = $permission_id;
        header('Location: ../php/home.php');
    } else {
        $_SESSION['session_authenticate'] = 'NO';
        header('Location: ../index.php?login=error_authenticate');
    }
?>
<?php 
    require_once './validate_session.php'; 

    $register_call = [];
    $registerBD = fopen('./login.php', 'r');

    while(!feof($registerBD)) {
        $register = fgets($registerBD);
        $register_call[] = $register;
    }
    fclose($registerBD);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../src/js/script.js" defer></script>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="shortcut icon" href="../src/svg/logo.svg" type="svg/x-icon">
    <title>Tech Help Desk</title>
</head>
<body>
    <?php
        include_once 'navbar.php';
    ?>
    <main id="consult">
        <div class="container-consult">
            <div class="header-consult">
                <h3 class="title-consult"><i class="fa-solid fa-magnifying-glass fa-lg"></i> Consultando chamados</h3>
            </div>
            <div class="card-body">

            <?php 
                foreach($register_call as $called) { 
                    $records_called = explode('#', $called);
                    if($_SESSION['permission_id'] == 2) {
                        if($_SESSION['user_id'] != $records_called[0]){
                            continue;
                        }
                    }
                    if(count($records_called) < 3) {
                        continue;
                    }
            ?>
                    <div class="card">
                        <h2 class="title-card"><?= $records_called[1] ?></h2>
                        <h4 class="category-card"><?= $records_called[2] ?></h4>
                        <p class="description-card"><?= $records_called[3] ?></p>
                    </div>
            <?php } ?>
                <a href="home.php" class="btn-back">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
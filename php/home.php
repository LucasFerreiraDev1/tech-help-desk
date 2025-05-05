<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/css/style.css">
    <title>Tech Help Desk</title>
</head>
<body>
    <?php
        include_once 'navbar.php';
    ?>
    <main id="home">
       <div class="container-home">
            <div class="header-home">
                <h2 class="title-home"><i class="fa-solid fa-house"></i> home</h2>
            </div>
            <div class="menu-home">
                <div class="card-home">
                    <a href="open_ticket.php" class="link-home">
                        <img src="../src/svg/open-ticket.svg" alt="Abrir Chamado" class="img-home">
                    </a>
                    <span class="description-home">Abrir Chamado</span>
                </div>
                <div class="card-home">
                    <a href="consult.php" class="link-home">
                        <img src="../src/svg/consult-ticket.svg" alt="Abrir Chamado" class="img-home">
                    </a>
                    <span class="description-home">Consultar Chamado</span>
                </div>
            </div>
       </div>
    </main>
</body>
</html>
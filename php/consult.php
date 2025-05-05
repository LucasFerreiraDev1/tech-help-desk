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
    <main id="consult">
        <div class="container-consult">
            <div class="header-consult">
                <h3 class="title-consult"><i class="fa-solid fa-magnifying-glass fa-lg"></i> Consultando chamados</h3>
            </div>
            <div class="card-body">
                <div class="card">
                    <h2 class="title-card">Joca mecânico</h2>
                    <h4 class="category-card">Hardware</h4>
                    <p class="description-card">
                        Descrição do problema no Tech Help Desk
                    </p>
                </div>
                <a href="home.php" class="btn-back">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
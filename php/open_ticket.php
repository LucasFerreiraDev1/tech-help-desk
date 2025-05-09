<?php require_once './validate_session.php'; ?>

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
    <main id="open_ticket">
        <div class="container-open">
            <div class="header-open">
                <h3 class="title-open"><i class="fa-solid fa-file-circle-plus"></i> Abrindo chamado</h3>
            </div>
            <form action="register_call.php" method="post" id="form_open">
                <div class="form-control">
                    <label for="title">Título</label>
                    <input type="text" name="title" id="title" placeholder="Título">
                </div>
                <div class="form-control">
                    <label for="category">Categoria</label>
                    <select name="category" id="category">
                        <option value="">Criação Categoria</option>
                        <option value="Impressora">Impressora</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Rede">Rede</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="btns-open">
                    <a href="home.php" class="btn-back">Voltar</a>
                    <button type="submit" id="btn_open">Abrir</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
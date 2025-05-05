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
    <header>
        <nav class="navbar">
            <a href="home.php" class="logo">
                <img src="../src/svg/logo.svg" alt="Tech Help Desk" width="40">
                <h1 class="title-logo">Tech Help Desk</h1>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="consult.php" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i> consultar</a>
                </li>
                <li class="nav-item">
                    <a href="logoff.php" class="nav-link"><i class="fa-solid fa-arrow-right-to-bracket"></i> sair</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="open_ticket">
        <div class="container-open">
            <div class="header-open">
                <h3 class="title-open"><i class="fa-solid fa-file-circle-plus"></i> Abrindo chamando</h3>
            </div>
            <form action="" method="post">
                <div class="form-control">
                    <label for="title">Título</label>
                    <input type="text" name="title" id="title">
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
                <div class="form-btn">
                    <a href="home.php">Voltar</a>
                    <button type="submit">Abrir</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
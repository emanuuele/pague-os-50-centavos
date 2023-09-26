<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pague os 50 centavos</title>
    <link rel="stylesheet" href="../globalStyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/cash.svg" type="image/svg">
</head>
<body>
    <?php 
        class Pessoa {
            public $nome;
            public $telefone;
            public $id;
        }
    ?>
    <div class="header">
        <h1>Devedores</h1>
        <a href="./criar_devedor/index.php" class="add"><img src="../img/plus.svg" alt="add payament" width="50"></a>
    </div>
    <div class="container">

        <div class="card">
            <p>João</p>
            <img src="../img/eye.svg" alt="more details">
        </div>
    </div>
    <footer class="menu">
        <a href="../pagamentos/index.php"><img src="../img/cash.svg" alt="pagamentos" width="50" height="50"></a>
        <a href="../devedores/index.php"><img src="../img/people.svg" alt="devedores" width="50" height="50"></a>
        <a href="../perfil/index.html"><img src="../img/person.svg" alt="perfil" width="50" height="50"></a>
    </footer>
</body>
</html>
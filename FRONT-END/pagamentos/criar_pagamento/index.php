<html lang="pt-br">
<?php
include_once 'index.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pague os 50 centavos</title>
    <link rel="stylesheet" href="../../globalStyle.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../img/cash.svg" type="image/svg">
</head>

<body>
    <?php
    class Pagamento
    {
        public $dtvencimento;
        public $devedor;
        public $valor_divida;
        public $dtlancamento;
    }
    ?>
    <div class="container">
        <div class="content">
            <div class="header">
                <h2>Criar pagamento</h2>
            </div>
            <div>
                <form action="" method="post">
                    <div>
                        <label for="dtvencimento">Data do vencimento</label>
                        <input class="input" name="dtvencimento" type="date">
                    </div>
                    <div>
                        <label for="dtlancamento">Data do vencimento</label>
                        <input class="input" name="dtlancamento" type="date">
                    </div>
                    <div>
                        <label for="valor_divida">Valor</label>
                        <input class="input" name="valor_divida" type="number">
                    </div>
                    <div>
                        <label for="cod_devedor">Devedor</label>
                        <select name="devedor" class="input">
                        </select>
                    </div>
                    <div style="display: flex; justify-content: center; width: 100%;">
                        <button class="primary-button">Criar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <footer class="menu">
        <a href="../../pagamentos/index.php"><img src="../../img/cash.svg" alt="pagamentos" width="50" height="50"></a>
        <a href="../../devedores/index.php"><img src="../../img/people.svg" alt="devedores" width="50" height="50"></a>
        <a href="../../perfil/index.html"><img src="../../img/person.svg" alt="perfil" width="50" height="50"></a>
    </footer>
</body>

</html>
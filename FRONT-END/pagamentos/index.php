<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pague os 50 centavos</title>
    <link rel="stylesheet" href="../globalStyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/cash.svg" type="image/svg">
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";

        import {rebaseConfig} from '../consts.js'
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script>
</head>

<body>
    <div class="header">
        <h1>Próximos pagamentos</h1>
        <a class="add" href="./criar_pagamento"><img src="../img/plus.svg" alt="add payament" width="50"></a>
    </div>
    <div class="container">

        <div class="card">
            <p>João</p>
            <p>R$500</p>
        </div>
    </div>
    <footer class="menu">
        <a href="../pagamentos/index.php"><img src="../img/cash.svg" alt="pagamentos" width="50" height="50"></a>
        <a href="../devedores/index.php"><img src="../img/people.svg" alt="devedores" width="50" height="50"></a>
        <a href="../perfil/index.html"><img src="../img/person.svg" alt="perfil" width="50" height="50"></a>
    </footer>
</body>

</html>
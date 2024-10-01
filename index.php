<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha o Idioma</title>
    <style>
        body {
            background-color: lightgreen; /* Cor de fundo */
            text-align: center;
        }
        .faixa {
            background-color: #E6E6FA; /* Faixa roxa clara */
            padding: 20px;
            font-size: 24px;
        }
        .bandeiras {
            display: flex; /* Usar flexbox para alinhar as bandeiras lado a lado */
            justify-content: center;
            gap: 10px; /* Espaçamento entre as bandeiras */
            margin: 20px 0; /* Margem superior e inferior */
        }
        .bandeira {
            cursor: pointer; /* Cursor em forma de mão ao passar sobre a bandeira */
            width: 100px; /* Largura fixa */
            height: 100px; /* Altura fixa */
            object-fit: cover; /* Redimensiona a imagem mantendo a proporção */
        }
    </style>
    <?php
    if (isset($_COOKIE["idioma"])) {
        echo "<br>";
        include "compara.inc"; // Inclui o arquivo de comparação de idiomas
        echo '<div class="escolher-outro">
                <br><a href="excluir_cookie.php">Escolher outro idioma</a>
              </div>';
    }
    ?>
</head>
<body>
<?php
    // Exibe o banner de "Bem-vindo" apenas se o cookie "idioma" não estiver definido
    if (!isset($_COOKIE["idioma"])) {
        echo '<div class="faixa">
                <h1>Bem-vindo ao site Web Design em Foco</h1>
              </div>';
    }
    ?>
    <?php
    if (!isset($_COOKIE["idioma"])) {
        echo '<h2>Escolha o idioma para entrar</h2>';
        echo '<div class="bandeiras">';
        echo '<a href="idioma.php?lang=portugues"><img class="bandeira" src="img/brasil.png"></a>';
        echo '<a href="idioma.php?lang=ingles"><img class="bandeira" src="img/inglaterra.png"></a>';
        echo '<a href="idioma.php?lang=espanhol"><img class="bandeira" src="img/espanha.png"></a>'; 
        echo '</div>';
    }
    ?>
</body>
</html>

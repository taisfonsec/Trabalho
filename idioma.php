<?php
if (isset($_GET['lang'])) {
    $idioma = $_GET['lang'];
    if (in_array($idioma, ['ingles', 'portugues', 'espanhol'])) {
        setcookie("idioma", $idioma, time() + (3 * 24 * 60 * 60)); // 3 dias
    }
    header("Location: index.php");
    exit();
}
?>

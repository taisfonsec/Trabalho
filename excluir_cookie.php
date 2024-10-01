<?php
setcookie("idioma", "", time() - 3600); // Excluir cookie
header("Location: index.php");
exit();
?>

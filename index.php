<!DOCTYPE html>
<html>
<head>
<title>Aula PHP</title>
</head>
<body>

<?php
$arquivo = fopen('meuarquivo.txt','w');
if ($arquivo == false) die('Não foi possível criar o arquivo.');
$texto = “Olá Mundo !!!”;
fwrite($arquivo, $ texto);
fclose($arquivo);
?>

</body>
</html> 
<!doctype html>
<html lang ="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> recebe dados </title>
</head>
<body>

<?php
$conexao = mysqli_connect("localhost", "root","","teste2");
//chegar conexao



if(!$conexao){
echo "NÃO CONECTADO";
}
echo "CONECTADO AO BANCO>>>>>>>>>>>";



$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Mensagem = $_POST['Mensagem'];

$sql = "INSERT INTO teste2.dados2(Nome,Email,Mensagem) values('$Nome','$Email','$Mensagem')";

$resultado = mysqli_query($conexao, $sql); 
echo">>MENSAGEM ENVIADA COM SUCESSO!<BR>";
echo "<a href='home.html'>voltar</a>";


?>


</body>
</html>
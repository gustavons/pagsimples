<?php
include('dbconnect.php');


echo $_POST['razao_social'];
echo $_POST['razao_social'];


$sql="INSERT INTO  fornecedores (  razao_social ,  nome_fantasia ,  cnpj ,  inscricao_estadual ,  cep ,  nome_rua ,  numero ,  complemento ,  cidade ,  estado ,  telefone ,  email ,  site_empresa ,  ramo_empresa ) VALUES ('{$_POST['razao_social']}', '{$_POST['nome_fantasia']}', '{$_POST['cnpj']}', '{$_POST['inscricao_estadual']}', '{$_POST['cep']}', '{$_POST['nome_rua']}', '{$_POST['numero']}', '{$_POST['complemento']}', '{$_POST['cidade']}', '{$_POST['estado']}', '{$_POST['telefone']}', '{$_POST['email']}', '{$_POST['site_empresa']}', '{$_POST['ramo_empresa']}')";



if (!mysqli_query($link,$sql))
{
    die('Error');
}

echo 'Usuário cadastrado';
header('Refresh: 1; URL = index.php');

?>
<?php
include('dbconnect.php');



$sql="UPDATE  fornecedores SET
    razao_social = '{$_POST['razao_social']}',  
    nome_fantasia = '{$_POST['nome_fantasia']}',
    cnpj = '{$_POST['cnpj']}',
    
    inscricao_estadual =  '{$_POST['inscricao_estadual']}' ,
    cep = '{$_POST['cep']}',
    nome_rua = '{$_POST['nome_rua']}',
    numero = '{$_POST['numero']}',
    complemento = '{$_POST['complemento']}',
    cidade = '{$_POST['cidade']}' ,
    estado='{$_POST['estado']}' ,
    telefone = '{$_POST['telefone']}' ,
    email = '{$_POST['email']}',
    site_empresa = '{$_POST['site_empresa']}',
    ramo_empresa = '{$_POST['ramo_empresa']}'";



if (!mysqli_query($link,$sql))
{
    die('Error');
}

echo 'Usuario alterardo com sucesso';
header('Refresh: 1; URL = index.php');

?>
<?php

    session_start();
    include "dbconnect.php";
    
    $lista_fornecedores = buscar_fornecedores($link);
    
    
?>

<!DOCTYPE html>
<html>
    
    <title>Fornecedores</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

<body>
    
    <table class="table">
        <tr>
            
            <th>Razao Social</th>
            <th>Nome Fantasia</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Opcoes</th>
        
        </tr>
        <?php foreach ($lista_fornecedores as $fornecedor) : ?>
        <tr>
            <td><?php echo $fornecedor['razao_social']; ?> </td>
            <td><?php echo $fornecedor['nome_fantasia']; ?> </td>
            <td><?php echo $fornecedor['email']; ?> </td>
            <td><?php echo $fornecedor['telefone']; ?> </td>
            
            <td> <!-- O campo com os links para editar e remover -->
                <a class="btn btn-warning" href="editar.php?id=<?php echo $fornecedor['id_fornecedor']; ?> ">
                    Editar
                </a>
            
                <a  class="btn btn-danger" href="editar.php?id=<?php echo $fornecedor['id_fornecedor']; ?> ">
                    Excluir
                </a>
            </td>
       
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
    
</html>

    


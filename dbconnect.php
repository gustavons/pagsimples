<?php

    $link = mysqli_connect("localhost", "sougusta", "", "projeto");
     
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
     
    // echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
     

    function buscar_fornecedores($link) {
        
        $sqlBusca = 'SELECT * FROM fornecedores';
        $resultado = mysqli_query($link, $sqlBusca);
        $fornecedores = array();
        
        while ($fornecedor = mysqli_fetch_assoc($resultado)) {
            $fornecedores[] = $fornecedor;
        }
        return $fornecedores;
    }
?>
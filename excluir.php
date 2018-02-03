<?php

    include "dbconnect.php";
    remover_fornecedor($link, $_GET['id']);
    header('Location: index.php');

?>
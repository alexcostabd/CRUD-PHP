<?php

include ("conexao.php");

$codigoproduto = $_POST['codigoproduto'];
$nomedoproduto = $_POST['nomedoproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "insert into `esq_estoque`(`codigo_prt`, `nome_prt`, `categori`, `quantidade`, `fornecedor`) VALUES ($codigoproduto,'$nomedoproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
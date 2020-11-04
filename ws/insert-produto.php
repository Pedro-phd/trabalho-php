 <?php
 include_once './ws/banco-de-dados.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST["nome_produto"]) && 
    isset($_POST["cod_produto"]) &&
    isset($_POST["val_unit_produto"]) && 
    isset($_POST["qnt_estoque_produto"]) &&
    isset($_POST["desc_produto"]) &&
    isset($_POST["peso_produto"]) &&
    isset($_POST["dimensoes_produto"]) &&
    isset($_POST["categoria_produto"]) ){
    $nome = $_POST["nome_produto"];
    $cod = $_POST["cod_produto"];
    $val_unit = $_POST["val_unit_produto"];
    $qntd_estoque = $_POST["qnt_estoque_produto"];
    $desc = $_POST["desc_produto"];
    $dimens = $_POST["dimensoes_produto"];
    $peso = $_POST["peso_produto"];
    $categoria = $_POST["categoria_produto"];
    
    $sql = "insert into aluno" 							
            . "(codigo_prod,nome_pro, descricao, quantidade, peso, , unidade_Venda, id) "
            . "values ('$nome','$cod','$val_unit','$qntd_estoque','$desc','$peso','$dimensoes','$id')";
    $conexaoBD = conectar();
    $incluiu = $conexaoBD->query($sql); // realiza a operação de inclusão
    $conexaoBD = null;
    
}
header("Location: admin.php");

 <?php
 include_once './banco-de-dados.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 

        $nome = $_POST["nome_produto"];
        $cod = $_POST["cod_produto"];
        $val_unit = $_POST["val_unit_produto"];
        $qntd_estoque = $_POST["qnt_estoque_produto"];
        $dimens = $_POST["dimensoes_produto"];
        $peso = $_POST["peso_produto"];
        $categoria = $_POST["categoria_produto"];
        $desc = $_POST["desc_produto"];
        $categoria = $_POST["id_categoria"];

        $val=true;
        $connection = mysqli_connect("localhost", "root", "","projetophp"); // conexão com o bd na nova sintaxe
        $consulta = mysqli_query($connection,"SELECT * FROM produto WHERE codigo_prod=$cod"); //verificação no campo produto com o codigo

        $linha = mysqli_num_rows($consulta); // definir variavel de verificação
        

        if($linha >= 1){ //if da verificação
            //se ja existir:
            $val = false;
            echo '  <script type="text/javascript">
                    alert("Produto com mesmo Código ja cadastrado") 
                    </script>';

            $conexaoBD = null;
            }
            
        
        else{
            //se não existir:
            $sql = "insert into produto" 							
                . "(codigo_prod,nome_pro, descricao,valor_unitario, quantidade, peso,dimensoes,  unidade_Venda,id) "
                . "values ('$cod','$nome','$desc','$val_unit','$qntd_estoque','$peso','$dimens','SP',$categoria)";
            $conexaoBD = conectar();
            $incluiu = $conexaoBD->query($sql); // realiza a operação de inclusã
            echo '  <script type="text/javascript">
                    alert("Produto cadastrado com sucesso!")
                    </script>';
            $conexaoBD = null;
            
        }
    

?>
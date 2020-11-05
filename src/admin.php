<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<style>
    *{
        font-family: 'Roboto', sans-serif;
    }
    input{
        margin: 0;
    }
    h3{
        margin-top: 10px;
        margin-bottom: 5px;
    }
</style>
<body>
    <form method="post" action="insert-produto.php">
        <hr>
        <h1>Cadastrar Produto</h1>
        <h3>Nome</h3>
        <input type="text" name="nome_produto" placeholder="Nome" required>
        <h3>Código</h3>
        <input type="text" name="cod_produto" placeholder="Código" required>
        <h3>Valor Unitario</h3>
        <input type="text" name="val_unit_produto" placeholder="Valor Unitario" required>
        <h3>Quantidade em estoque</h3>
        <input type="text" name="qnt_estoque_produto" placeholder="Quantidade em estoque" required>
        <h3>Dimensões</h3>
        <input type="text" name="dimensoes_produto" placeholder="Dimensões do produto" required>
        <h3>Descrição</h3>
        <input type="text" name="desc_produto" placeholder="Descrição" required>
        <h3>Peso KG</h3>
        <input type="number" name="peso_produto" placeholder="Peso KG" required>
        <h3>Categoria</h3>
        <select name="categoria_produto" id="categoria">
            <option value="default">Nenhuma Categoria</option>
            <option value="Teste1">Teste1</option>
            <option value="Teste2">Teste1</option>
        </select>
        <input type="submit" value="Cadastrar">
        <hr>
    </form>
    <form action="">
        <h1>Cadastrar Transportadora</h1>
        <h3>Nome</h3>
        <input type="text" placeholder="Nome">
        <h3>Endereço</h3>
        <input type="text" placeholder="Endereço">
        <h3>Numero</h3>
        <input type="text" placeholder="Numero">
        <h3>Bairro</h3>
        <input type="text" placeholder="Bairro">
        <h3>Cidade</h3>
        <input type="text" placeholder="Cidade">
        <h3>Estado</h3>
        <input type="text" placeholder="Estado">
        <h3>cep</h3>
        <input type="text" placeholder="cep">
        <h3>cpf/cnpj</h3>
        <input type="text" placeholder="cpf/cnpj">
        <button>Cadastrar</button>
        <hr>
    </form>
     <form action="">
        <h1>Cadastrar Cliente</h1>
        <h3>Nome</h3>
        <input type="text" placeholder="Nome">
        <h3>Endereço</h3>
        <input type="text" placeholder="Endereço">
        <h3>Bairro</h3>
        <input type="text" placeholder="Bairro">
        <h3>Cidade</h3>
        <input type="text" placeholder="Cidade">
        <h3>Estado</h3>
        <input type="text" placeholder="Estado">
        <h3>cep</h3>
        <input type="text" placeholder="cep">
        <h3>cpf/cnpj</h3>
        <input type="text" placeholder="cpf/cnpj">
        <button>Cadastrar</button>
        <hr>
    </form>
    <form action="">
        <h1>Cadastrar Vendedor</h1>
        <h3>Nome</h3>
        <input type="text" placeholder="Nome">
        <h3>cpf/cnpj</h3>
        <input type="text" placeholder="cpf/cnpj">
        <button>Cadastrar</button>
        <hr>
    </form>
    <form action="">
        <h1>Cadastrar Categoria</h1>
        <h3>Nome</h3>
        <input type="text" placeholder="Nome">
        <h3>id</h3>
        <input type="text" placeholder="id">
        <button>Cadastrar</button>
        <hr>
    </form>
</body>
</html>
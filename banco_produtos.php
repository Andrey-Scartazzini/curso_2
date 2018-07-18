<?php include('conecta.php');
require_once("class/produto.php");?>
<?php
		function listaProduto($conexao) {
			$produtos = array();
			$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
			while ($produto_array = mysqli_fetch_assoc($resultado)) {

                $produto->$nome = $produto_array['nome'];
                $produto->$preco = $produto_array['preco'];
                $produto->$descricao = $produto_array['descricao'];
                $produto->$categoria_id = $produto_array['categoria_nome'];
                $produto->$usado = $produto_array['usado'];
			    array_push($produtos, $produto);
			}
			return $produtos;
		};
        function BuscaProduto($conexao, $id) {
            $query  = "select * from produtos where id = $id";
            $resultado = mysqli_query($conexao, $query);
            return mysqli_fetch_assoc($resultado);
        };
		function alteraProduto ($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $id){
			$query = "update produtos set nome='$nome', preco=$preco, descricao='$descricao', categoria_id=$categoria_id, usado=$usado where id='$id'";
			return mysqli_query($conexao,$query);
		};
        function insereProduto($conexao, Produto $produto){
            $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('$produto->nome', $produto->preco, '$produto->descricao', '$produto->categoria_id', $produto->usado)";
            return mysqli_query($conexao,$query);
        };
		function removeProduto($conexao, $id) {
			$query = "delete from produtos where id= {$id}";
			return mysqli_query($conexao,$query);
		};
?>
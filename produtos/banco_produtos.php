<?php
    include('../conecta.php');
    require_once("../class/produto.php");
    require_once("../class/categoria.php");
?>
<?php
		function listaProduto($conexao) {
			$produtos = array();
			$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
			while ($produto_array = mysqli_fetch_assoc($resultado)) {
			    $produto = new Produto();
			    $categoria = new Categoria();
                $categoria->nome = $produto_array['categoria_nome'];

                $produto->id = $produto_array['id'];
                $produto->nome = $produto_array['nome'];
                $produto->setPreco($produto_array['preco']);
                $produto->descricao = $produto_array['descricao'];
                $produto->categoria = $categoria;
                $produto->usado = $produto_array['usado'];
			    array_push($produtos, $produto);
			}
			return $produtos;
		};
        function BuscaProduto($conexao, $id) {
            $query  = "select * from produtos where id = $id";
            $resultado = mysqli_query($conexao, $query);
            return mysqli_fetch_assoc($resultado);
        };
		function alteraProduto ($conexao, $produto){
			$query = "update produtos set nome='$produto->nome', preco=".$produto->getPreco().", descricao='$produto->descricao', categoria_id=$produto->categoria, usado=$produto->usado where id='$produto->id'";
			return mysqli_query($conexao,$query);
		};
        function insereProduto($conexao, Produto $produto){
            $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('$produto->nome', ".$produto->getPreco().", '$produto->descricao', '$produto->categoria', $produto->usado)";
            return mysqli_query($conexao,$query);
        };
		function removeProduto($conexao, $produto) {
			$query = "delete from produtos where id= {$produto->id}";
			return mysqli_query($conexao,$query);
		};
?>
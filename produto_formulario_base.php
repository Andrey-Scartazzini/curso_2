<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr>
    <td>Nome</td>
    <td><input class="form-control" type="text" name="nome" value="<?= $produto['nome'] ?>"></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input class="form-control" type="number" name="preco" value="<?= $produto['preco']?>"></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea class="form-control" name="descricao"><?= $produto['descricao'] ?></textarea></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" value="true" <?= $usado ?>/>usado
    </td>
</tr>
<tr>
    <td>
        Categoria
    </td>
    <td>
        <select name='categoria_id' class="form-control">
            <?php foreach($categorias as $categoria){
                $acategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $acategoria ? "selected='selected'" : "";
                ?>
                <option value="<?= $categoria['id']?>" <?= $selecao ?>> <?= $categoria['nome']?></option>
            <?php } ?>
        </select>
    </td>
</tr>
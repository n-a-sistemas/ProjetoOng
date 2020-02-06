<div class="container text-center col">

    <form action="insertProdutos.php" method="POST" enctype=multipart/form-data>

        <div class="form-group text-left col-2">
            <label for="">Código</label>
            <input type="text" name="codigo" class="form-control codigo" required>
        </div>
        <div class="form-group text-left col-2">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="" class="form-control" required>
                <option value="1">Camisa</option>
                <option value="2">Calça</option>
                <option value="3">Sapato</option>
            </select>
        </div>

        <div class="form-group text-left col">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group text-left col-2">
            <label for="">Quantidade</label>
            <input type="text" name="quantidade" class="form-control codigo" required>
        </div>

        <div class="form-group text-left col">
            <label for="">Descrição</label>
            <input type="text" name="descricao" class="form-control">
        </div>

        <div class="form-group text-left col">
            <label for="" class="custom-file-label">Inserir imagem...</label>
            <input type="file" name="imagem" value="Pesquisar" class="custom-file-input col" required>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-lg btn-outline-primary my-4 mx-4">

        <input type="reset" value="Cancelar" class="btn btn-lg btn-outline-danger my-4 mx-4">
    </form>
</div>
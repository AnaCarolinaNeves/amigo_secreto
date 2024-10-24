<?php include __DIR__ . '/../header.php'; ?>

<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-2">Atualizar cadastro</h3>
            <div class="d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="/cadastrar" method="POST">
                            <input type="hidden" name="id" value="<?php echo isset($pessoa) ? $pessoa['id'] : ''; ?>">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    value="<?php echo isset($pessoa) ? $pessoa['nome'] : ''; ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?php echo isset($pessoa) ? $pessoa['email'] : ''; ?>" required>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>
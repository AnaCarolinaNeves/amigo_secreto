<?php include __DIR__ . '/../header.php'; ?>

<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-2">Cadastrar nova pessoa</h2>
        
        <div class="d-flex justify-content-center mb-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <form action="/cadastrar" method="POST" id="formCadastro">
                        <div class="form-group">
                            <label for="nome">Nome *</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                value="<?php echo isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : ''; ?>" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success" id="btnSalvar" disabled>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const nomeInput = document.getElementById('nome');
        const emailInput = document.getElementById('email');
        const btnSalvar = document.getElementById('btnSalvar');

        function validarCampos() {
            const nomeValido = nomeInput.value.trim() !== '';
            const emailValido = emailInput.value.trim() !== '' && emailInput.checkValidity();
            btnSalvar.disabled = !(nomeValido && emailValido);
        }

        nomeInput.addEventListener('input', validarCampos);
        emailInput.addEventListener('input', validarCampos);
    </script>
</body>

</html>

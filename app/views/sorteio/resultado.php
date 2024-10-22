<?php include __DIR__ . '/../header.php'; ?>

<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-2">Resultado do Sorteio</h2>
        <ul class="list-group">
            <?php foreach ($resultados as $quem => $quemTirou): ?>
                <li class="list-group-item">
                    <?php echo htmlspecialchars($quem); ?> tirou <?php echo htmlspecialchars($quemTirou); ?>.
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>

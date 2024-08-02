<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Listagem de Pedidos</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="card-body">
            <h1>Listagem de Pedidos</h1>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Data de Vencimento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pedidos)): ?>
                        <?php foreach ($pedidos as $pedido): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($pedido['id']); ?></td>
                                <td><?php echo htmlspecialchars($pedido['nome']); ?></td>
                                <td><?php echo htmlspecialchars($pedido['valor']); ?></td>
                                <td><?php echo htmlspecialchars($pedido['data_vencimento']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Nenhum pedido encontrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>

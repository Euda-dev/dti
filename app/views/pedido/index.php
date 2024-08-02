<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastro de Pedido</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Pedido</h2>
        <form action="/pedido/create" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="data_vencimento" class="form-label">Data de Vencimento</label>
                <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Pedido</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
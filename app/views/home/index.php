<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Prova DTI</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">Prova Prática DTI</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="index.php?route=cadastro">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Pedidos
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer text-center">
                    DTI UCDB
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pedidos</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-table me-1"></i>Lista Pedidos</span>
                            <a class="btn btn-primary" href="index.php?route=cadastro">Cadastrar Pedido</a>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Valor</th>
                                        <th>Data de vencimento</th>
                                        <th>Alterar</th>
                                        <th>Deletar</th>
                                        <th>Desconto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($pedidos)): ?>
                                        <?php foreach ($pedidos as $pedido): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($pedido['nome']); ?></td>
                                                <td><?php echo htmlspecialchars($pedido['valor']); ?></td>
                                                <td><?php echo htmlspecialchars($pedido['data_vencimento']); ?></td>
                                                <td><a href="index.php?route=editar&id=<?php echo htmlspecialchars($pedido['id']); ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                                <td><a href="index.php?route=deletar&id=<?php echo htmlspecialchars($pedido['id']); ?>"><i class="bi bi-trash-fill"></i></a></td>
                                                <td><i class="bi bi-percent"></i></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6">Nenhum pedido encontrado.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Prova Prática DTI 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>

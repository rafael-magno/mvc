<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href = "<?php echo BASE_URL ?>/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cliente</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
    <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/meiomask.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.form.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
</head>
<body>
    <div class="container">
        <?php if ($clienteEdit->getIdcliente()): ?>
            <a href="Cliente">Novo Cliente</a>
        <?php endif ?>
        <form action="Cliente/salvarDados" method="post">
            <div class="row">
                <div class="col-lg-1">Nome</div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" name="nomeCliente" value="<?php echo $clienteEdit->getNomeCliente() ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Salvar">
                </div>
            </div>
            <input type="hidden" name="idcliente" value="<?php echo $clienteEdit->getIdcliente() ?>">
            <input type="hidden" id="mensagem" value="<?php echo $_SESSION['mensagem'] ?>">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listagemCliente as $linhaCliente): ?>
                    <tr>
                        <td><?php echo $linhaCliente->getIdcliente() ?></td>
                        <td><?php echo $linhaCliente->getNomeCliente() ?></td>
                        <td><a href="Cliente/?idcliente=<?php echo $linhaCliente->getIdcliente() ?>">Editar</a></td>
                        <td><a href="Cliente/removerDados/?idcliente=<?php echo $linhaCliente->getIdcliente() ?>">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
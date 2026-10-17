<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Página inicial</title>

</head>

<body>
    <form action="processar_nf.php" method="POST">
        <label name="cliente" id="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente">

        <label name="num_nf" id="num_nf">Número da nota</label>
        <input type="text" name="num_nf" id="num_nf">

        <label name="data_nf" id="data_nf">Data da nota</label>
        <input type="date" name="data_nf" id="data_nf">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
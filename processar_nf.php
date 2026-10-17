<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST["cliente"];
    $num_nf = $_POST["num_nf"];
    $data_nf = $_POST["data_nf"];

    if (!empty($cliente) && !empty($num_nf) && !empty($data_nf)) {
        $sql = "INSERT INTO Nf (cliente, num_nf, data_nf) VALUES (?,?,?)";

        $stmt = $conexao->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sss", $cliente, $num_nf, $data_nf);

            if ($stmt->execute()) {
                $mensagem = "Nota fiscal cadastrada com sucesso!";
            } else {
                $mensagem = "Erro ao cadastrar nota fiscal." . $stmt->error;
            }
            $stmt->close();
        } else {
            $mensagem = "Erro!" . $conexao->error;
        }
    } else {
        $mensagem = "Preencha todos os campos corretamente!";
    }

}
if (isset($mensagem)) {
    echo htmlspecialchars($mensagem);

}
<?php 

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$query_veiculo = "INSERT INTO veiculos (nome, categoria, descricao, preco, vagas, destaque) VALUES (:nome, :categoria, :descricao, :preco, :vagas, :destaque)";
$cad_veiculo = $conn->prepare($query_veiculo);
$cad_veiculo->bindParam(':nome', $dados['nome']);
$cad_veiculo->bindParam(':categoria', $dados['categoria']);
$cad_veiculo->bindParam(':descricao', $dados['descricao']);
$cad_veiculo->bindParam(':preco', $dados['preco']);
$cad_veiculo->bindParam(':vagas', $dados['vagas']);
$cad_veiculo->bindParam(':destaque', $dados['destaque']);
$cad_veiculo->execute();

if($cad_veiculo->rowCount()){
    $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Vaga cadastrada com suceeso!</div>"];
}else{
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Não foi possível realizar o cadastro da vaga</div>"];
}

echo json_encode($retorna);
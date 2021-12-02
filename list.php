<?php
include_once "conexao.php";

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if(!empty($pagina)){

    $qnt_result_pg = 4;
    $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;



$query_veiculos = "SELECT id, nome, categoria, descricao, preco, vagas,destaque FROM veiculos ORDER BY id DESC LIMIT $inicio, $qnt_result_pg";
$result_veiculos = $conn->prepare($query_veiculos);
$result_veiculos->execute();

$dados = "<div class='table-responsive'>
            <table class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nome</th>
                        <th>categoria</th>
                        <th>descrição</th>
                        <th>preço</th>
                        <th>vagas</th>
                        <th>destaque</th>
                        <th>ações</th>
                    </tr>
                </thead>
                <tbody>";
while($row_veiculo = $result_veiculos->fetch(PDO::FETCH_ASSOC)) {
    extract($row_veiculo);
    $dados .= "<tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$categoria</td>
                    <td>$descricao</td>
                    <td>$preco</td>
                    <td>$vagas</td>
                    <td>$destaque</td>
                    <td>
                    <button id='$id' class='btn btn-outline-primary btn-sm'
                    onclick='visveiculo($id)'>Visualizar</button>
                    </td>
                </tr>";

}

$dados .= "</tbody>
        </table>
    </div>";

    $query_pg = "SELECT COUNT(id) AS num_result FROM veiculos";
    $result_pg = $conn->prepare($query_pg);
    $result_pg->execute();
    $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);

    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    $max_links = 2;

    $dados .= '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-center">';

    $dados .= "<li class='page-item'><a href='#' class='page-link' onclick='listarVeiculos(1)'>Primeira</a></li>";

    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        if($pag_ant >= 1){
            $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarVeiculos($pag_ant)' >$pag_ant</a></li>";
        }        
    }    

    $dados .= "<li class='page-item active'><a class='page-link' href='#'>$pagina</a></li>";

    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_pg){
            $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarVeiculos($pag_dep)'>$pag_dep</a></li>";
        }        
    }

    $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarVeiculos($quantidade_pg)'>Última</a></li>";
    $dados .=   '</ul></nav>';

    echo $dados;

}else{
    echo "<div class='alert alert-danger' role='alert'>Erro: Nenhum veiculo encontrado</div>";
}

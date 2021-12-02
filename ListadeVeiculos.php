<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Listagem das vagas</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4>Listar Vagas</h4>
                </div>
                <div>
                <button type="button" class="btn btn-primary"
                         data-bs-toggle="modal" data-bs-target="#CadVeiculoModal">
                    Cadastrar
                </button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">                
                <span class="listar-veiculos"></span>
            </div>
        </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="CadVeiculoModal" tabindex="-1" aria-labelledby="CadVeiculoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="CadVeiculoModalLabel">Cadastrar Vaga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="cad-veiculo-form">
            <span id="msgAlerta"></span>

            <div class="mb-3">
              <label for="nome" class="col-form-label">Nome:</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
            </div>

            <div class="mb-3">
              <label for="categoria" class="col-form-label">Categoria:</label>
              <input type="text" name="categoria" class="form-control" id="categoria" placeholder="Insira Carro, Moto ou Bicileta" required>
            </div>

            <div class="mb-3">
              <label for="descricao" class="col-form-label">Descrição:</label>
              <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição da vaga" required>
            </div>

            <div class="mb-3">
              <label for="preco" class="col-form-label">Preço:</label>
              <input type="text" name="preco" class="form-control" id="preco" placeholder="Preço da vaga" required>
            </div>

            <div class="mb-3">
              <label for="vagas" class="col-form-label">Vagas:</label>
              <input type="text" name="vagas" class="form-control" id="vagas" placeholder="Insira o número de vagas disponiveis" required>
            </div>

            <div class="mb-3">
              <label for="destaque" class="col-form-label">Destaque:</label>
              <input type="text" name="destaque" class="form-control" id="destaque" placeholder="Insira 1 para SIM ou 2 para NÃO" required>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <input type="submit" class="btn btn-primary" id="cad-veiculo-btn" value="Cadastrar"/>
        </div>        
        </form>
        </div>

        </div>
    </div>
    </div>

    <!-- MODAL DA VISUALIZAÇÃO -->

    <div class="modal fade" id="visVeiculoModal" tabindex="-1" aria-labelledby="visVeiculoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visVeiculoModalLabel">Detalhes do Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            <span id="msgAlerta"></span>
            <dl class="row">
                <dt class="col-sm-3">ID:</dt>
                <dd class="col-sm-9"><span id="idVeiculo"></span></dd>
                
                <dt class="col-sm-3">Nome:</dt>
                <dd class="col-sm-9"><span id="nomeVeiculo"></span></dd>

                <dt class="col-sm-3">Categoria:</dt>
                <dd class="col-sm-9"><span id="categoriaVeiculo"></span></dd>

                <dt class="col-sm-3">Descrição:</dt>
                <dd class="col-sm-9"><span id="descricaoVeiculo"></span></dd>

                <dt class="col-sm-3">Preço:</dt>
                <dd class="col-sm-9"><span id="precoVeiculo"></span></dd>

                <dt class="col-sm-3">Vagas:</dt>
                <dd class="col-sm-9"><span id="vagasVeiculo"></span></dd>

                <dt class="col-sm-3">Destaque:</dt>
                <dd class="col-sm-9"><span id="destaqueVeiculo"></span></dd>

            </dl>
        </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>
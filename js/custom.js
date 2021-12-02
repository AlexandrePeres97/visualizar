const tbody = document.querySelector(".listar-veiculos");
const cadForm = document.getElementById("cad-veiculo-form");
const msgAlerta = document.getElementById("msgAlerta");
const cadModal = new bootstrap.Modal(document.getElementById("CadVeiculoModal"));



const listarVeiculos = async (pagina) => {
    const dados = await fetch("./list.php?pagina=" + pagina);
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}


listarVeiculos(1);


cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);


    const dados = await fetch("cadastrar.php", {
        method:"POST",
        body: dadosForm,
    });

    const resposta = await dados.json();

    if(resposta['erro']){
        msgAlerta.innerHTML = resposta['msg'];
    }else{
        msgAlerta.innerHTML = resposta['msg'];
        cadForm.reset();
        cadModal.hide();
        listarVeiculos(1);
    }

});

async function visveiculo(id){
    //console.log("Acessou: " + id);

    const dados = await fetch('visualizar.php?id=' + id);
    const resposta = await dados.json();
    //console.log(resposta);

    if(resposta['erro']){
        msgAlerta.innerHTML = resposta['msg'];
    }else{
        const visModal = new bootstrap.Modal(document.getElementById("visVeiculoModal"));
        visModal.show();

        document.getElementById("idVeiculo").innerHTML = resposta['dados'].id;
        document.getElementById("nomeVeiculo").innerHTML = resposta['dados'].nome;
        document.getElementById("categoriaVeiculo").innerHTML = resposta['dados'].categoria;
        document.getElementById("descricaoVeiculo").innerHTML = resposta['dados'].descricao;
        document.getElementById("precoVeiculo").innerHTML = resposta['dados'].preco;
        document.getElementById("vagasVeiculo").innerHTML = resposta['dados'].vagas;
        document.getElementById("destaqueVeiculo").innerHTML = resposta['dados'].destaque;
    }

}
function salvarProduto(event) {
    // para o formulário de enviar para outra página
    event.preventDefault();

    let inputIdProduto = document.getElementsByName('id_produto')[0];
    let idProduto = inputIdProduto.value;

    let inputProduto = document.getElementsByName('produto')[0];
    let Produto = inputProduto.value;

    let inputQuantidade = document.getElementsByName('quantidade')[0];
    let Quantidade = inputQuantidade.value;
    
    let inputPreco = document.getElementsByName('preco')[0];
    let Preco = inputPreco.value;

    if (idProduto == "") {
        cadastrar(idProduto, Produto, Quantidade, Preco);
    } else {
        alterar(idProduto, Produto, Quantidade, Preco);
    }
    document.getElementsByTagName('form')[0].reset()
}

document.addEventListener("DOMContentLoaded", () => {
    listarTodos();
});

function cadastrar(idProduto, Produto, Quantidade, Preco) {
    fetch('crud/inserir.php',
        {
            method: 'POST',
            body: JSON.stringify({

                id_produto: idProduto,
                produto: Produto,
                Quantidade: Quantidade,
                preco: Preco

            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    ).then(response => response.json())
        .then(produto => inserirProduto(produto))
        .catch(error => console.log(error));
}

function alterar(idProduto, Produto, Quantidade, Preco) {
    fetch('crud/alterar.php',
        {
            method: 'POST',
            body: JSON.stringify({

                id_produto: idProduto,
                produto: Produto,
                Quantidade: Quantidade,
                preco: Preco

            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    ).then(response => response.json())
        .then(produto => alterarProduto(produto))
        .catch(error => console.log(error));
}

function alterarProduto(produto) {
    let tbody = document.getElementById('Produtos');
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == produto.id_produto) {
            tr.children[1].innerHTML = produto.produto;
            tr.children[3].innerHTML = produto.Quantidade;
            tr.children[4].innerHTML = produto.preco;
        }
    }
}

function listarTodos() {
    fetch("crud/listar.php", {
        method: "GET",
        headers: { 'Content-Type': "application/json; charset=UTF-8" }
    }
    ).then(Response => Response.json())
        .then(produtos => inserirProdutos(produtos))
        // erro no http
        .catch(error => console.log(error));
}
function inserirProduto(produtos) {
    let tbody = document.getElementById('Produtos');

    let tr = document.createElement('tr');
    let tdId = document.createElement('td');
    tdId.innerHTML = produtos.id_produto;

    let tdProduto = document.createElement('td');
    tdProduto.innerHTML = produtos.produto;
    
    let tdQuantidade = document.createElement('td');
    tdQuantidade.innerHTML = produtos.quantidade;
    
    let tdPreco = document.createElement('td');
    tdPreco.innerHTML = produtos.preco;

    let tdAlterar = document.createElement('td');
    let btnAlterar = document.createElement('button');
    btnAlterar.innerHTML = "Alterar";
    btnAlterar.addEventListener("click", buscarProduto, false);
    btnAlterar.id_produto = produtos.id_produto;
    tdAlterar.appendChild(btnAlterar);
    let tdExcluir = document.createElement('td');
    let btnExcluir = document.createElement('button');
    btnExcluir.addEventListener("click", excluir, false);
    btnExcluir.id_produto = produtos.id_produto;
    btnExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);

    tr.appendChild(tdId);
    tr.appendChild(tdProduto);
    tr.appendChild(tdQuantidade);
    tr.appendChild(tdPreco);
    tr.appendChild(tdAlterar);
    tr.appendChild(tdExcluir);
    tbody.appendChild(tr);
}

function inserirProdutos(produtos) {
    for (const produto of produtos) {

        inserirProduto(produto);

    }
}

function buscarProduto(evt) {
    let id_produto = evt.currentTarget.id_produto;

    fetch('crud/buscar.php?id_produto=' + id_produto,
        {
            method: "GET",
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    ).then(response => response.json())
        .then(produto => preencheForm(produto))
        .catch(error => console.log(error));
}

function preencheForm(produto) {
    let inputIdProduto = document.getElementsByName('id_produto')[0];
    inputIdProduto.value = produto.id_produto;

    let inputProduto = document.getElementsByName('produto')[0];
    inputProduto.value = produto.produto;

    let inputQuantidade = document.getElementsByName('quantidade')[0];
    inputQuantidade.value = produto.quantidade;
    
    let inputPreco = document.getElementsByName('preco')[0];
    inputPreco.value = produto.preco;

}

function excluir(evt) {
    let id_produto = evt.currentTarget.id_produto;
    let excluir = confirm("Você tem certeza que deseja excluir o produto");
    if (excluir) {


        fetch('crud/excluir.php?id_produto=' + id_produto,
            {
                method: "GET",
                headers: { 'Content-Type': "application/json; charset=UTF-8" }
            }
        ).then(response => response.json())
            .then(retorno => excluirProduto(retorno, id_produto))
            .catch(error => console.log(error));
    }

}

function excluirProduto(retorno, id_produto) {

    if (retorno) {
        let tbody = document.getElementById('Produtos');
        for (const tr of tbody.children) {
            if (tr.children[0].innerHTML == id_produto) {
                tbody.removeChild(tr);
            }
        }
    }
}
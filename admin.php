<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <?php include "links.php"; ?>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <main>
        <div class="container center">
            <div class="row">

                <div class="col s12 ">
                    <h1 class="center">Cadastro de computadores</h1>
                </div>

                <form onsubmit="return salvarProduto(event);">

                    <div class="row">
                        <div class="input-field col s6 offset-s3">
                            <i class="material-icons prefix">lock</i>
                            <input id="id" type="text" class="validate" name="id_produto">
                            <label for="nome">ID</label>
                        </div>




                        <div class="input-field col s6 offset-s3">
                            <i class="material-icons prefix"> business_center</i>
                            <input id="nomeCliente" type="text" class="validate" name="nomeCliente" pattern="^[A-Za-zÀ-ÿ]+$" required>
                            <label for="nomeCliente">Nome do produto</label>
                            <span class="helper-text" data-error="Preencha o campo sem usar números."> </span>
                        </div>



                        <!-- <div class="input-field col s9">
              <i class="material-icons prefix"> description</i>
              <input id="dataNasc" type="text" class="datepicker" name="dataNasc">
              <label for="dataNasc">Data nascimento</label>
            </div> -->

                        <div class="input-field col s6 offset-s3">
                            <i class="material-icons prefix"> add</i>
                            <input placeholder="apenas números" id="quantidade" type="number" class="validate" name="quantidade" required>
                            <label for="quantidade">Quantidade</label>
                            <span class="helper-text" data-error="Deve ter 6 caracteres, no mínimo e  conter pelo menos 1 maiuscula,1 minuscula e 1 número;."> </span>
                        </div>

                        <div class="input-field col s6 offset-s3">
                            <i class="material-icons prefix"> monetization_on</i>
                            <input id="preco" type="number" class="validate" name="preco" required>
                            <label for="preco">Preço</label>
                            <span class="helper-text" data-error="Deve ter 6 caracteres, no mínimo e  conter pelo menos 1 maiuscula,1 minuscula e 1 número;."> </span>
                        </div>

                        <div class="row">
                            <div class="col s6 offset-s3">
                                <p class="center-align">
                                    <button class="btn waves-effect waves-light brown  lighten-3" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i> </button>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 offset-s3">
                                <p class="center-align">
                                    <a href='relatorio.php' class="brown lighten-3 waves-effect waves-light btn"><i class="material-icons right">add</i>Gerar relatório</a>
                                </p>
                            </div>

                            <!-- <div> -->
                                <label for="id_produto">ID:</label>
                                <input type="number" name="id_usuario" id="id_usuario"> <br>

                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome"> <br>

                                <label for="quantidade">Quantidade:</label>
                                <input type="number" name="quantidade" id="quantidae"> <br>

                                <label for="descricao">descricao:</label>
                                <textarea name="descricao" id="descricao" cols="10" rows="10"></textarea><br>

                                <label for="preco">preço:</label>
                                <input type="number" name="preco" id="preco"> <br>

                                <input type="submit" value="Salvar Usuário">
                            <!-- </div> -->
                </form>

                <table style="margin-top: 30px;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>quantidade</th>
                            <th>descrição</th>
                            <th>preço</th>
                            <th colspan="2">Opções</th>
                        </tr>
                    </thead>

                    <tbody id="Produtos">

                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Loja de Computadores | <a href="#">Privacidade</a></p>
    </footer>

    <script>
        // Inicializa o date picker
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elems, {
                autoClose: true, // Fecha o date picker automaticamente após a seleção
                format: 'dd/mm/yyyy', // Define o formato da data
                yearRange: [1900, 2100], // Define o intervalo de anos


                onSelect: function(date) {
                    console.log('Data selecionada: ', date);
                }
            });
        });




        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>


    <!-- Link para o JS do Materialize (não será utilizado neste caso) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
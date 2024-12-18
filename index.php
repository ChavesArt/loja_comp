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

        .card-title {
            text-align: center;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .card-content {
            text-align: center;
        }

        .card-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-card {
            margin-bottom: 20px;
        }

        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

</head>

<body>

  <?php include "navbar.php"; ?>

  <main>
 
  <div class="container">
        <div class="row">
            <!-- Cartão 1 -->
            <div class="col s12 m6 l4 product-card">
                <div class="card">
                    <div class="card-image">
                        <img src="img/PC_gamer.jpg" alt="Computador 1">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Computador Gamer XYZ</span>
                        <p>Processador: Intel i7, 16GB RAM, SSD 512GB</p>
                        <p>Preço: R$ 4.999,00</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Comprar</a>
                        <a href="#">Detalhes</a>
                    </div>
                </div>
            </div>

            <!-- Cartão 2 -->
            <div class="col s12 m6 l4 product-card">
                <div class="card">
                    <div class="card-image">
                        <img src="img/notebook.jpg" alt="Computador 2">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Notebook Ultrafino ABC</span>
                        <p>Processador: Intel i5, 8GB RAM, SSD 256GB</p>
                        <p>Preço: R$ 2.799,00</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Comprar</a>
                        <a href="#">Detalhes</a>
                    </div>
                </div>
            </div>

            <!-- Cartão 3 -->
            <div class="col s12 m6 l4 product-card">
                <div class="card">
                    <div class="card-image">
                        <img src="img/PC_desktop.jpg" alt="Computador 3">
                    </div>
                    <div class="card-content">
                        <span class="card-title">PC Desktop ABC</span>
                        <p>Processador: AMD Ryzen 5, 16GB RAM, HDD 1TB</p>
                        <p>Preço: R$ 3.200,00</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Comprar</a>
                        <a href="#">Detalhes</a>
                    </div>
                </div>
            </div>

               <!-- Cartão 4 -->
    <div class="col s12 m6 l4 product-card">
        <div class="card">
            <div class="card-image">
                <img src="img/mac.jpg" alt="Computador 4">
            </div>
            <div class="card-content">
                <span class="card-title">MacBook Pro M1</span>
                <p>Processador: Apple M1, 8GB RAM, SSD 256GB</p>
                <p>Preço: R$ 11.999,00</p>
            </div>
            <div class="card-action">
                <a href="#">Comprar</a>
                <a href="#">Detalhes</a>
            </div>
        </div>
    </div>

    <!-- Cartão 5 -->
    <div class="col s12 m6 l4 product-card">
        <div class="card">
            <div class="card-image">
                <img src="img/topo_linha.png" alt="Computador 5">
            </div>
            <div class="card-content">
                <span class="card-title">PC Gamer Topo de Linha</span>
                <p>Processador: Intel i9, 32GB RAM, SSD 1TB</p>
                <p>Preço: R$ 12.500,00</p>
            </div>
            <div class="card-action">
                <a href="#">Comprar</a>
                <a href="#">Detalhes</a>
            </div>
        </div>
    </div>
    
        </div>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" href="admin.php">
            <i class="material-icons">create</i>
        </a>
    </div>

  </main>
  
  <div class="footer">
        <p>&copy; 2024 Loja de Computadores | <a href="#">Privacidade</a></p>
    </div>

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

  <!-- Footer -->

    <!-- Link para o JS do Materialize (não será utilizado neste caso) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
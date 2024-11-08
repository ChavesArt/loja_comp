<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Computadores</title>
    <!-- Link para o CSS do Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #0288d1;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
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
            background-color: #0288d1;
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

    <header>
        <h1>Loja de Computadores</h1>
        <p>Encontre o computador ideal para você!</p>
    </header>

    <div class="container">
        <div class="row">
            <!-- Cartão 1 -->
            <div class="col s12 m6 l4 product-card">
                <div class="card">
                    <div class="card-image">
                        <img src="https://via.placeholder.com/300x200?text=Computador+1" alt="Computador 1">
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
                        <img src="https://via.placeholder.com/300x200?text=Computador+2" alt="Computador 2">
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
                        <img src="https://via.placeholder.com/300x200?text=Computador+3" alt="Computador 3">
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

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Loja de Computadores | <a href="#">Privacidade</a></p>
    </div>

    <!-- Link para o JS do Materialize (não será utilizado neste caso) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
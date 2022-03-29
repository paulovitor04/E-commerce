<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php print $cabecalho_title; ?></title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
</head>

<body>
    <?php
        $cabecalho_title = "Produto da Mirror Fashion";
        include("cabecalho.php"); ?>

        <div class="produto-back">
        <div id="conteudo">
        <div clas="container">
            <div class="produto">
                <h1>Fuzzy Cardigan</h1>
                <p>Por apenas R$ 129,00</p>

                <form>
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>

                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto2-verde.png" alt="verde">
                        </label>

                        <input type="radio" name="cor" value="rosa" id="rosa" checked>
                        <label for="rosa">
                            <img src="img/produtos/foto2-rosa.png" alt="rosa">
                        </label>

                        <input type="radio" name="cor" value="azul" id="azul" checked>
                        <label for="azul">
                            <img src="img/produtos/foto2-azul.png" alt="azul">
                        </label>

                    </fieldset>

                    <fieldset class="tamanhos">
                        <legend>Escolha o tamanho:</legend>

                        <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    </fieldset>

                    <input type="submit" class="comprar" value="Comprar">
                </form>
            </div>
            <div class="detalhes">
                <h2>Detalhes do produto</h2>

                <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compra já e receba hoje mesmo pela nossa entrega a jato.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Características</th>
                            <th>Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardigã 7845</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algodão e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
        </div>
        </div>
    <?php include("rodape.php"); ?>
</body>
</html>
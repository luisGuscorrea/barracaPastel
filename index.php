<?php
$servername = "localhost";
$database = "barracaPastel";
$username = "root";
$password = "";

// Criar a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Checar a conexão

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

echo "Conectado com sucesso";
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <script src="script.js"></script>
    <title>

    </title>
</head>

<body>
    <div class="wrapper">
        <div class="box1">
            <h1>
                PEDIDOS - BARRACA DO PASTEL
            </h1>
        </div>
        <div class="box2">
            <h1>
                Pastel
            </h1>
            <table>
                <tr>
                    <td>
                        Salgado
                    </td>
                </tr>
                <tr>
                    <td>
                        Doce
                    </td>
                </tr>
            </table>
        </div>
        <div class="box3">
            <h1>
                Crepe
            </h1>
            <table>
                <tr>
                    <td>
                        Salgado
                    </td>
                </tr>
                <tr>
                    <td>
                        Doce
                    </td>
                </tr>
            </table>
        </div>
        <div class="box4">
            <h1>
                Bebidas
            </h1>
            <table>
                <tr>
                    <td>
                        Refrigerante
                    </td>
                </tr>
                <tr>
                    <td>
                        Alcoolicas
                    </td>
                </tr>
            </table>
        </div>
        <div class="box5">
            <h1>
                Continuar
            </h1>
            <a href="cart.html">
                <button>Próxima</button>
            </a>
        </div>
        <div class="box6">
            <h1>
                Resetar
            </h1>
        </div>
        <div class="box7">
            <div class="menu">
                <div class="category" onclick="toggleOptions('pastelOptions')">
                    <span>Pastel</span>
                </div>
                <div id="pastelOptions" class="options">
                    <div class="option">
                        <span>Carne</span>
                        <input type="number" placeholder="Quantidade">
                    </div>
                    <div class="option">
                        <span>Queijo</span>
                        <input type="number" placeholder="Quantidade">
                    </div>
                    <div class="option">
                        <span>Pizza</span>
                        <input type="number" placeholder="Quantidade">
                    </div>
                </div>
            </div>
        </div>
        <div class="box8">8</div>
        <div class="box9">9</div>
        <div class="box10">10</div>
        <div class="box11">11</div>
        <div class="box12">12</div>
    </div>
</body>

</html>
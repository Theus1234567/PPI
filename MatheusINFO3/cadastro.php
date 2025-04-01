<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = htmlspecialchars($_POST["item_name"]);
    $item_quantity = (int) htmlspecialchars($_POST["item_quantity"]);
    $item_image = htmlspecialchars($_POST["item_image"]);

    $file = "inventario.txt";
    $items = [];

    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            list($name, $quantity, $url) = explode("|", $line);
            $items[$name] = ["quantity" => (int)$quantity, "url" => $url];
        }
    }

    if (isset($items[$item_name])) {
        $items[$item_name]["quantity"] += $item_quantity;
    } else {
        $items[$item_name] = ["quantity" => $item_quantity, "url" => $item_image];
    }

    $new_data = "";
    foreach ($items as $name => $data) {
        $new_data .= "$name|{$data['quantity']}|{$data['url']}\n";
    }

    file_put_contents($file, $new_data);

    // Redireciona de volta ao inventário
    header("Location: inventario.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/sword.png" type="image/x-icon">
    <title>The Legend of Zelda: Cadastro</title>
    <style>
        @font-face {
            font-family: Zelda;
            src: url(font/Triforce.ttf) format('truetype');
        }

        body {
            font-family: 'Zelda', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            background-image: url('img/img-back.jpg.jfif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            width: 100%;
        }

        .container {
            font-family: 'Zelda', sans-serif;
            color: white;
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #333; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .container h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 2px solid #fff;
            border-radius: 4px;
            background-color: #333;
            color: white;
            box-sizing: border-box;
        }

        .input-group input:focus {
            outline: none;
            border-color: #f39c12; 
        }

        .button {
            width: 100%;
            padding: 12px;
            background-color: #f39c12;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #e67e22;
        }

        .link{
            color: #e67e22;
            text-decoration:#e67e22;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 style="color: #1d6e84;">Adicionar ao Inventário</h1>
    
    <form action="cadastro.php" method="POST">
        <div class="input-group">
            <label for="item-name">Nome do Item</label>
            <input type="text" id="item-name" name="item_name" placeholder="Digite o nome do item" required>
        </div>

        <div class="input-group">
            <label for="item-quantity">Quantidade</label>
            <input type="number" id="item-quantity" name="item_quantity" placeholder="Digite a quantidade" required>
        </div>

        <div class="input-group">
            <label for="item-image">URL da Imagem</label>
            <input type="url" id="item-image" name="item_image" placeholder="Digite a URL da imagem" required>
            <p>Para adicionar imagem, recomenda-se este <a href="https://game8.co/games/Zelda-Tears-of-the-Kingdom/archives/411261" class="link" style="color: #e67e22;">site</a></p>
        </div>

        <button type="submit" class="button">Adicionar ao Inventário</button>
    </form>
</div>

</body>
</html>

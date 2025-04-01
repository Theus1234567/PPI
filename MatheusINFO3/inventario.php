<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/sword.png" type="image/x-icon">
    <title>The Legend of Zelda: Inventário</title>
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
            align-items: center;
            text-align: center;
            color: white;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #333; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .inventory {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .item {
            background-color: #222;
            padding: 10px;
            border-radius: 8px;
            width: 120px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .item img {
            width: 80px; /* Tamanho menor */
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .button {
            font-family: 'Zelda', sans-serif;
            width: 100%;
            padding: 12px;
            background-color: #f39c12;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
        }

        .button:hover {
            background-color: #e67e22;
        }

        header{
            background-color:#333;
            font-size: large;
            padding: 15px 30px 15px 30px;
            margin: 0px;
            display: flex;
            justify-content: right;
        }

        .header-div{
            display: flex;
            align-items: end;
            justify-content: center;
        }

    </style>
</head>
<body>

<header>
    <div class="header-div">
        <a href="login.php" style="text-decoration: none; color:#e67e22" >Logout</a>
    </div>
</header>

<div class="container">
    <h1>Inventário</h1>

    <div class="inventory">
        <?php
        $file = "inventario.txt";

        if (file_exists($file)) {
            $items = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($items as $item) {
                list($name, $quantity, $url) = explode("|", $item);
                echo "<div class='item'>
                        <img src='$url' alt='$name'>
                        <h3>$name</h3>
                        <p>Qtd: $quantity</p>
                      </div>";
            }
        } else {
            echo "<p>Nenhum item cadastrado ainda.</p>";
        }
        ?>
    </div>

    <a href="cadastro.php" class="button">Cadastrar itens</a>

</div>  

</body>
</html>

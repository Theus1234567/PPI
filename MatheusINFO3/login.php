<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/sword.png" type="image/x-icon">
    <title>The Legend of Zelda: Login</title>
</head>

<!-- CSS -->
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
    }

    .video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh; 
        overflow: hidden;
        z-index: 1; 
    }

    video {
        object-fit: cover; 
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .login-container {
        background-color: #333;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        width: 300px;
        z-index: 3;
        position: absolute; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    h2 {
        color: #1d6e84;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        color: white;
        margin-bottom: 5px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #222;
        color: white;
    }

    .input-group input:focus {
        border-color: #1d6e84;
        outline: none;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #1d6e84;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #166e82;
    }

    .error-message {
        color: red;
        text-align: center;
        margin-top: 10px;
    }

</style>

<body>

    
    
    <div class="video-container">
        <video autoplay muted loop>
            <source src="video/zelda-tears-hd.mp4" type="video/mp4">
        </video>
    </div>

    <div class="login-container">
        <h2>Fazer Login</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Login</label>
                <input type="text" id="User" placeholder="Usuário" name="User" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="Pass" placeholder="Senha" name="Pass" required>
            </div>
            <button type="submit" class="btn">Entrar</button>

            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    define ("USER", "User");
                    define ("Pass", "User123");
    
                    $user = $_POST['User'];
                    $pass = $_POST['Pass'];
    
                    if ($user == USER && $pass == Pass) {
                        echo "<p>Login bem-sucedido!</p>";
                        header("Location: inventario.php");
                        exit; 
                    } else {
                        echo "<p class='error-message'>Usuário ou senha incorretos!</p>";
                    }
                }
            ?>
        </form>
    </div>




</body>
</html>

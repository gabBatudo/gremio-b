<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="./logar.php" method="post">
                <div class="input-control">
                    <label for="user">User:</label>
                    <input type="text" name="user" placeholder="insira o usuario" id="user">
                </div>
                <div class="input-control">
                    <label for="password">Senha:</label>
                    <input type="password" name="pass" placeholder="Insira a senha" id="password">
                </div>

                <button type="submit">Logar</button>
            </form>
        </div>
    </div>
</body>
</html>
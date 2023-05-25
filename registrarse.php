<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
</head>

<body>
    <header>
        <img src="./img/logo.png" alt="Logo">
    </header>
    <main>
        <form action="./app/registrarse.php" method="post">
            <h1>SIGN UP</h1>
            <input type="nombre" name="nombre" placeholder="Nombre" required>
            <input type="apellidos" name="apellidos" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">SIGN UP</button>
            <a href="./index.php">Loguearse</a>
        </form>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<body>

    <div class="container">

        <!-- LOGO -->
        <div class="logo">
            <a href="#"><img src="./media/img/logo.png" alt="Crunchyroll"></a>
        </div>

        <h1>Acceder</h1>

        <form action="login_process.php" method="POST">

            <input type="email" name="email" placeholder="Dirección de email" required>

            <input type="password" name="password" placeholder="Contraseña" required>

            <button type="submit" class="btn">ACCEDER</button>

        </form>

        <!-- LINK CREAR CUENTA -->
        <div class="crear-cuenta">
            <a href="register.php" style="color:#FF8200; text-decoration:none;">CREAR CUENTA</a>
        </div>

    </div>

</body>
</html>

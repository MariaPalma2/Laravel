<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - EventosApp</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f7fc;">

    <header style="background-color: #2d3e50; color: white; padding: 20px 0; text-align: center;">
        <h1>Iniciar sesión en EventosApp</h1>
    </header>

    <main style="max-width: 400px; margin: 40px auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Campo de correo -->
            <div style="margin-bottom: 20px;">
                <label for="email" style="display: block; font-weight: bold; color: #333;">Correo electrónico</label>
                <input type="email" name="email" id="email" required autofocus
                       style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Campo de contraseña -->
            <div style="margin-bottom: 30px;">
                <label for="password" style="display: block; font-weight: bold; color: #333;">Contraseña</label>
                <input type="password" name="password" id="password" required
                       style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <!-- Botón de inicio de sesión -->
            <button type="submit" style="width: 100%; padding: 14px; background-color: #2d3e50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                Iniciar sesión
            </button>

            <!-- Enlace a registro -->
            <div style="text-align: center; margin-top: 20px;">
                <p style="color: #555;">¿No tienes cuenta? <a href="{{ route('register') }}" style="color: #2d3e50; text-decoration: none;">Regístrate aquí</a></p>
            </div>
        </form>
    </main>

    <footer style="text-align: center; background-color: #2d3e50; color: white; padding: 10px 0;">
        <p>&copy; {{ date('Y') }} EventosApp. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

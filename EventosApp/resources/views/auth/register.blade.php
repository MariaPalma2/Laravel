<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - EventosApp</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

    <header style="background-color: #4CAF50; color: white; text-align: center; padding: 20px;">
        <h1>Registrarse en EventosApp</h1>
    </header>

    <section style="max-width: 400px; margin: 0 auto; padding: 20px;">
        <div style="background-color: #ffffff; padding: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label for="name" style="display: block; font-weight: bold;">Nombre completo:</label>
                    <input type="text" name="name" id="name" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="email" style="display: block; font-weight: bold;">Correo electrónico:</label>
                    <input type="email" name="email" id="email" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="password" style="display: block; font-weight: bold;">Contraseña:</label>
                    <input type="password" name="password" id="password" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="password_confirmation" style="display: block; font-weight: bold;">Confirmar contraseña:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <button type="submit" style="background-color: #4CAF50; color: white; width: 100%; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                    Registrarse
                </button>
            </form>

            <div style="text-align: center; margin-top: 15px;">
                <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" style="color: #4CAF50; text-decoration: none;">Inicia sesión aquí</a></p>
            </div>
        </div>
    </section>

    <footer style="text-align: center; background-color: #333; color: white; padding: 10px 0; margin-top: 30px;">
        <p>Creado por TU NOMBRE Y APELLIDOS</p>
    </footer>

</body>
</html>

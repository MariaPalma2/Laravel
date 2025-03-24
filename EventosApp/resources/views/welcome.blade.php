<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a EventosApp</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <header style="background-color: #4CAF50; padding: 20px; color: white; text-align: center;">
        <h1>¡Bienvenido a EventosApp!</h1>
        <p>Descubre y participa en una amplia gama de actividades interesantes. Desde conferencias educativas hasta encuentros sociales, encuentra los eventos que te apasionan y mantente al día con lo último en tu comunidad.</p>
    </header>

    <section style="padding: 20px; max-width: 800px; margin: 0 auto;">
        <!-- Verificar si el usuario está logueado -->
        @if (auth()->check())
            <div style="background-color: #e7f7e7; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <p>Estás logueado como: <strong>{{ auth()->user()->name }}</strong></p>
                <a href="{{ route('eventos.index') }}" style="text-decoration: none; color: #4CAF50;">Ir a la lista de eventos</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="background-color: #f44336; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cerrar sesión</button>
                </form>
            </div>
        @else
            <div style="background-color: #e7f7e7; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <p>No estás logueado. <a href="{{ route('login') }}" style="color: #4CAF50; text-decoration: none;">Iniciar sesión</a> | 
                   <a href="{{ route('register') }}" style="color: #4CAF50; text-decoration: none;">Registrarse</a></p>
            </div>
        @endif

        <!-- Enlace a la lista de eventos -->
        <div style="background-color: #e7f7e7; padding: 10px; border-radius: 5px; margin-top: 20px;">
            <h2 style="text-align: center; color: #333;">Explora nuestros próximos eventos</h2>
            <p style="text-align: center;">Haz clic en el siguiente enlace para ver todos los eventos disponibles.</p>
            <p style="text-align: center;">
                <a href="{{ route('eventos.index') }}" style="text-decoration: none; color: #4CAF50; font-size: 18px; font-weight: bold;">Ver todos los eventos</a>
            </p>
        </div>
    </section>

    <!-- Footer con línea horizontal y mensaje de creador -->
    <footer style="text-align: center; background-color: #333; color: white; padding: 10px 0;">
        <hr style="border: 1px solid #ccc; margin: 10px 0;">
        <p>Creado por María Palma Jiménez</p>
    </footer>

</body>
</html>

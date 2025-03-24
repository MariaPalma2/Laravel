<!-- resources/views/eventos/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Evento</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <header style="background-color: #4CAF50; padding: 20px; color: white; text-align: center;">
        <h1>Detalles del Evento</h1>
    </header>

    <section style="padding: 20px; max-width: 800px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <tbody>
                <tr>
                    <th style="text-align: left; padding: 10px;">Nombre del Evento</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->nombreEvento }}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 10px;">Fecha de Inicio</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->fechaInicio }}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 10px;">Fecha de Fin</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->fechaFin }}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 10px;">Tipo de Evento</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->tipo }}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 10px;">Número de Participantes</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->participantes }}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 10px;">Descripción</th>
                    <td style="text-align: left; padding: 10px;">{{ $evento->descripcion }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('eventos.index') }}" style="text-decoration: none; color: #4CAF50;">Volver a la lista de eventos</a>
    </section>

    <footer style="text-align: center; background-color: #333; color: white; padding: 10px 0;">
        <hr style="border: 1px solid #ccc; margin: 10px 0;">
        <p>Creado por María Palma Jiménez</p>
    </footer>

</body>
</html>

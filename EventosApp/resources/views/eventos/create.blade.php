<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Evento</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; margin: 0; padding: 0;">

    <header style="background-color: #4CAF50; color: white; padding: 20px; text-align: center;">
        <h1>Crear un Nuevo Evento</h1>
        <p>Complete el formulario para crear un nuevo evento. Recuerde, solo puede crear un máximo de 5 eventos.</p>
    </header>

    <section style="padding: 20px; max-width: 800px; margin: 0 auto;">
        @if(session('error'))
            <div style="color: red; background-color: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('eventos.store') }}" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nombreEvento" style="display: block; font-weight: bold;">Nombre del Evento:</label>
                <input type="text" id="nombreEvento" name="nombreEvento" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="fechaInicio" style="display: block; font-weight: bold;">Fecha de Inicio:</label>
                <input type="date" id="fechaInicio" name="fechaInicio" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="fechaFin" style="display: block; font-weight: bold;">Fecha de Fin:</label>
                <input type="date" id="fechaFin" name="fechaFin" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="tipo" style="display: block; font-weight: bold;">Tipo de Evento:</label>
                <input type="text" id="tipo" name="tipo" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="participantes" style="display: block; font-weight: bold;">Número de Participantes:</label>
                <input type="number" id="participantes" name="participantes" required style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="descripcion" style="display: block; font-weight: bold;">Descripción del Evento:</label>
                <textarea id="descripcion" name="descripcion" style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 5px; height: 150px;"></textarea>
            </div>

            <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer;">Crear Evento</button>
        </form>
    </section>

    <footer style="text-align: center; background-color: #333; color: white; padding: 10px 0; margin-top: 40px;">
        <hr style="border: 1px solid #ccc; margin: 10px 0;">
        <p>Creado por María Palma Jiménez</p>
    </footer>

</body>
</html>

Se requiere desarrollar una plataforma para gestionar eventos (de nombre EventosApp). La aplicación debe tener las siguientes características:

Debe estar desarrollada en Laravel.
Hay 10 organizadores de eventos (usuarios registrados):
Cada usuario puede CREAR un máximo de 5 eventos, PERO podrá editar y eliminar de forma ilimitada.
Los usuarios deben poder registrarse desde la url /register de la aplicación de Laravel.
La url para crear debe ser /create.
La url para editar debe ser /update.
Si un usuario ha gastado su número máximo de creaciones, cuando accede a la ruta /create debe recibir el mensaje en <h1>: "Se han terminado el número máximo de creaciones por usuario, póngase en contacto con el administrador de la aplicación".
Los eventos:
No están asociados a ningún organizador en particular y pueden ser creados por cualquier usuario registrado.
Los eventos podrán ser creados, editados o eliminados sólo por usuarios registrados.
Los usuarios invitados (no registrados) podrán ver la lista de eventos, pero en ningún caso podrán crear, editar o eliminar eventos.
Los eventos se mostrarán en la url '/eventos' de la aplicación de Laravel.
La página de eventos '/eventos' deberá tener los eventos paginados de 10 en 10 y ser ordenada alfabéticamente por el nombreEvento.
Cada evento listado debe tener a su derecha la opción de editar y eliminar. Pero estas opciones solo pueden ser vistas si el usuario es un usuario registrado.
La página de eventos debe de tener un botón (o enlace) con la palabra 'CREAR EVENTO' que lleve a la vista correspondiente a crear un nuevo evento.
Los eventos deben tener los siguientes campos nombreEvento, fechaInicio (dato tipo fecha), fechaFin (dato tipo fecha), tipo (a elegir entre: 'reunión', 'conferencia', 'taller', 'presentación', 'concierto'), participantes (número entre 1 y 15) (dato tipo número entero), descripción (breve texto descriptivo). Todos los campos deben ser 'nullables'. 
Deben existir un número de 150 eventos autogenerados con semillas.
En la lista de eventos completos sólo se verán los campos nombreEvento, fechaInicio y tipo.
Debe de existir una vista en la que se muestre un solo evento /eventos/'numeroEvento' (donde 'numeroEvento' debe ser el número del id del evento que se está mostrando. En esta vista se mostrarán TODOS los campos del evento en concreto. Organízalos en una tabla invisible de forma que se muestre la información organizada. Para acceder a esta vista, se debe hacer clic en cualquier evento desde la página '/eventos'.
La página principal de la aplicación '/' mostrará el siguiente mensaje: "¡Bienvenido a nuestra plataforma de eventos! Descubre y participa en una amplia gama de actividades interesantes. Desde conferencias educativas hasta encuentros sociales, encuentra los eventos que te apasionan y mantente al día con lo último en tu comunidad. Explora, inscríbete y disfruta de experiencias inolvidables con nosotros."
Debes incluir una parte de footer en la plantilla de tus vistas. En el footer de la aplicación debe de haber dos cosas:
Una línea horizontal.
Debajo de la línea horizontal debe aparecer el mensaje "Creado por TU NOMBRE Y APELLIDOS".

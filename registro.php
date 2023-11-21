<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Design by foolishdeveloper.com -->
    <title>Pre-Matricula Registro</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <link href="template.css" rel="stylesheet" />
  </head>
  <body>
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <form>
      <h3>Registro</h3>

      <label for="numEst">Numero de Estudiante</label>
      <input type="text" placeholder="123-45-6789" id="numEst" maxlength="9" />

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="nombre completo" id="nombre" />

      <label for="Aestudio">Año de Estudio</label>
      <input type="number" placeholder="año actual de estudio" id="Aestudio" />

      <label for="password">Contraseña</label>
      <input type="password" placeholder="contraseña" id="password" />

      <button>Entrar</button>
    </form>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Multipasos :: Urian Viera</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Registrar Cliente</header>
      <div class="progress-bar">
        <div class="step">
          <p>Paso 1</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 2</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 3</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Fin</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form data-toggle="validator" action="insertar_servicios.php" method="POST">
          <div class="page">
            <div class="title">Es hora de presentarte al mundo</div>
            <div class="field">
              <div class="label">Fecha de nacimiento</div>
              <input type="date" name="fecha_nacimiento" required>
            </div>
            <div class="field">
              <div class="label">Selecciona tu género: </div>
              <select name="genero" required>
                <option>Hombre</option>
                <option>Mujer</option>
                <option>Binario</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Sube tu foto de perfil</div>
              <input type="file" name="foto_perfil" accept="image/*" required>
            </div>
            <!--<div class="field">
              <div class="label">Sube tu vídeo</div>
              <input type="file" name="foto_vídeo">
            </div>-->
            <div class="field btns">
              <button class="prev-1 prev">Atrás</button>
              <button class="submit">Siguiente</button>
            </div>
          </div>

        </form>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="./js/validator.min.js"></script> 

  </body>
</html>

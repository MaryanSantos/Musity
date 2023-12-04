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
        <form data-toggle="validator" action="insertar_M2.php" method="POST">
          <div class="page slide-page">
            <div class="title">Datos personales</div>
            <div class="field">
              <div class="label">Fecha de nacimiento</div>
              <input type="date" name="fecha_nacimiento" required>
            </div>
            <!--<div class="field">
              <div class="label">Selecciona tu género: </div>
              <select name="genero" required>
                <option>Hombre</option>
                <option>Mujer</option>
                <option>Binario</option>
              </select>
            </div>-->
            <div class="field">
              <div class="label">Foto de perfil</div>
              <input type="file" name="foto_perfil" accept="image/*" required>
            </div>
            <div class="field">
              <div class="label">Número telefonico</div>
              <input type="text" name="numero_telefono"  required>
            </div>
            <div class="field">
              <div class="label">Ciudad de origen</div>
              <input type="text" name="ciudad_origen" required>
            </div>
            <!--<div class="field">
              <div class="label">Fecha de nacimiento</div>
              <input type="date" name="fecha_nacimiento" required>
            </div>-->
            <!--<div class="field">
              <div class="label">Contraseña</div>
              <input type="password" name="contrasena" pattern="[A-Z]a-z_-0-9]{1,20}" title="La contraseña debe tener al menos 8 caracteres, una mayúscula y un carácter especial" required oninput="mostrarMensajeError(this)">
            </div>-->
            <div class="field btns">
              <button type="submit" class=" form-control-submit-button">Siguiente</button>
            </div>
          </div>
          </div>

        </form>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="./js/validator.min.js"></script> 

  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Multipasos :: Urian Viera</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="manifest" href="manifest.json" />
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
        <form data-toggle="validator" action="insertar_datos.php" method="POST">
          <div class="page slide-page">
            <div class="title">Datos personales</div>
            <div class="field">
              <div class="label">Nombre Completo</div>
              <input type="text" name="nombre_completo" required>
            </div>
            <div class="field">
              <div class="label">Apellidos</div>
              <input type="text" name="apellidos" required>
            </div>
            <div class="field">
              <div class="label">Correo electrónico</div>
              <input type="email" name="correo_electronico" required>
            </div>
            <div class="field">
              <div class="label">Contraseña</div>
              <input type="password" name="contrasena" pattern="[A-Z]a-z_-0-9]{1,20}" title="La contraseña debe tener al menos 8 caracteres, una mayúscula y un carácter especial" required oninput="mostrarMensajeError(this)">
            </div>
            <div class="field">
              <button type="submit" class="firstNext next form-control-submit-button">Siguiente</button>
            </div>
          </div>

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
              <button class="next-1 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="field">
              <div class="label">Selecciona tu genero favorito: </div>
              <select name="genero_favorito" required>
                <option>Rock</option>
                <option>Pop</option>
                <option>Reggaeton</option>
                <option>Regional Mexicano</option>
                <option>Trova</option>
                <option>Salsa</option>
                <option>Jazz</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Selecciona lo que prefieres contratar</div>
              <select name="tipo_contratacion" required>
                <option>Solista</option>
                <option>Agrupación</option>
              </select>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Atrás</button>
              <button class="next-2 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Información de contacto</div>
            <div class="field">
              <div class="label">Número de telefono</div>
              <input type="text" name="numero_telefono" pattern="\d{10}" title="El número de teléfono debe tener 10 dígitos" required oninput="mostrarMensajeError(this)">
            </div>
            <script>
              function mostrarMensajeError(input) {
                  input.setCustomValidity('');
                  if (!input.validity.valid) {
                      input.setCustomValidity(input.title);
                  }
              }
            </script>
            <div class="field">
              <div class="label">Ciudad de origen</div>
              <input type="text" name="ciudad_origen" required>
            </div>
            <div class="form-group checkbox">
              <input type="checkbox"   required>Yo acepto los términos y condiciones de Musity. <a href="privacy-policy.html"></a> 
              <div class="help-block with-errors"></div>
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Atrás</button>
              <button class="submit">Finalizar</button>
            </div>
          </div>


        </form>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="./js/validator.min.js"></script> 

  </body>
</html>

         
      
  <?php require_once 'includes/helpers.php'; ?>
  <div class="row">
          <div class="col s12 m12 l12">
            <?php if(isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                <?=$_SESSION['completado']; ?>
              </div>
          <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-exito">
            <?=$_SESSION['errores']['general'] ?>
          </div>
          <?php endif; ?>
            <form action="registrar.php" method="post">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" />
              <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') :''; ?>

              <label for="apellidos">Apellidos </label>
              <input type="text" name="apellidos" />
              <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') :''; ?>

              <label for="email">Email</label>
              <input type="email" name="email" />
               <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') :''; ?>

              <label for="contraseña">Contraseña</label>
              <input type="password" name="password">
              <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') :''; ?>
              <input type="submit" name="submit" value="Registrar">

            </form>
            <?php borrarErrores() ; ?>
          </div>
  </div>
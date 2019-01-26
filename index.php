 <!DOCTYPE html>
<html lang="es">
 <head> 
   <!--aqui va el header.php-->  
  <?php include 'includes/header.php'; ?>
</head>
   
      <!--menu bar-->
        <?php include 'includes/navbar.php'; ?>
      
          <!--aqui va el slider-->
        <?php include 'includes/slider.php'; ?>

        <?php include 'includes/search.php'; ?>

        <?php include 'includes/tresiconos.php'; ?>

        <?php include 'includes/popularplaces.php'; ?>

        <?php include 'includes/socialmedia.php'; ?>

        <?php include 'includes/gallery.php';?>

        <?php include 'includes/contact.php'; ?> 

        <?php include 'includes/footer.php'; ?>

      <div class="container">
        
        <!--formulario para registrarse-->
        <?php //include 'includes/formularioregistrar.php'; ?>
      </div>
      <div class="container">       
       <!--aqui va la secciton para entrar-->
       <?php //include 'includes/loguearse.php' ;?> 
      </div>


















    
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      //Side bar
      const sideNav = document.querySelector('.sidenav');
      M.Sidenav.init(sideNav, {});

    </script>
    <script>      
      const slider = document.querySelector('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 400,
        transition: 500,
        interval:4000
      });
      //autocomplete
      const ac = document.querySelector('.autocomplete');
      M.Autocomplete.init(ac, {
        data: {
          "Seguros": null,
          "Reaseguros": null,
          "Fianzas": null,
          "Estadisticas": null,

        }
      });

      //Material Boxed
      const mb = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(mb, {});

      //scrollspy
      const ss = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(ss, {});
    </script>
    </body>
  </html>

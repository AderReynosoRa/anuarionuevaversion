<div class="row">
	<div class="col s16 m16 l6">
	  <div class="formularilogin">
	    <h3>Identificarse</h3>
	    <?php if(isset($_SESSION['error-login'])): ?>
	    <div class="row">
	      <div class="alerta alerta-error">
	             <?=$_SESSION['error-login']; ?>
	      </div>                   
	    <?php endif; ?>
	   <form action="login.php" method="post">
	     <label for="email">Email</label>
	     <input type="email" name="email" />

	     <label for="passwort">Contraseña</label>
	     <input type="password" name="password" />

	     <input type="submit" value="Entrar" /> 

	   </form>

	  </div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
		  <?php if(isset($_SESSION['usuario'])): ?>	  
		  	
		    	<h3> Bienvenido <?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
		    	<!--botones-->	    	
			
		   
		  <?php endif; ?>
	   </div>
  </div>

	</div>
</div>
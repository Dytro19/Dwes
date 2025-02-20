<div class="container is-fluid mb-6">
	<h1 class="title">Regletas</h1>
	<h2 class="subtitle">Actualizar Regleta</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['power_strip_id_up'])) ? $_GET['power_strip_id_up'] : 0;
		$id=limpiar_cadena($id);

		/*== Verificando regleta ==*/
    	$check_regleta=conexion();
    	$check_regleta=$check_regleta->query("SELECT * FROM regleta WHERE regleta_id='$id'");

        if($check_regleta->rowCount()>0){
        	$datos=$check_regleta->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['regleta_nombre']; ?></h2>

	<form action="./php/regleta_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="regleta_id" value="<?php echo $datos['regleta_id']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Código de barra</label>
				  	<input class="input" type="text" name="regleta_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required value="<?php echo $datos['regleta_codigo']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="regleta_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['regleta_nombre']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Precio</label>
				  	<input class="input" type="text" name="regleta_precio" pattern="[0-9.]{1,25}" maxlength="25" required value="<?php echo $datos['regleta_precio']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Stock</label>
				  	<input class="input" type="text" name="regleta_stock" pattern="[0-9]{1,25}" maxlength="25" required value="<?php echo $datos['regleta_stock']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
				<label>Categoría</label><br>
		    	<div class="select is-rounded">
				  	<select name="regleta_categoria" >
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM categoria");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								if($datos['categoria_id']==$row['categoria_id']){
    									echo '<option value="'.$row['categoria_id'].'" selected="" >'.$row['categoria_nombre'].' (Actual)</option>';
    								}else{
    									echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
    								}
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_regleta=null;
	?>
</div>
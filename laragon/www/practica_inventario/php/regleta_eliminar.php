<?php
	/*== Almacenando datos ==*/
    $power_strip_id_del=limpiar_cadena($_GET['power_strip_id_del']);

    /*== Verificando regleta ==*/
    $check_regleta=conexion();
    $check_regleta=$check_regleta->query("SELECT * FROM regleta WHERE regleta_id='$power_strip_id_del'");

    if($check_regleta->rowCount()==1){

    	$datos=$check_regleta->fetch();

    	$eliminar_regleta=conexion();
    	$eliminar_regleta=$eliminar_regleta->prepare("DELETE FROM regleta WHERE regleta_id=:id");

    	$eliminar_regleta->execute([":id"=>$power_strip_id_del]);

    	if($eliminar_regleta->rowCount()==1){

    		if(is_file("./img/regleta/".$datos['regleta_foto'])){
    			chmod("./img/regleta/".$datos['regleta_foto'], 0777);
				unlink("./img/regleta/".$datos['regleta_foto']);
    		}

	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡regleta ELIMINADO!</strong><br>
	                Los datos del regleta se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar el regleta, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_regleta=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El regleta que intenta eliminar no existe
            </div>
        ';
    }
    $check_regleta=null;
<?php
	require_once "main.php";

	/*== Almacenando datos ==*/
    $power_strip_id=limpiar_cadena($_POST['img_del_id']);

    /*== Verificando regleta ==*/
    $check_regleta=conexion();
    $check_regleta=$check_regleta->query("SELECT * FROM regleta WHERE regleta_id='$power_strip_id'");

    if($check_regleta->rowCount()==1){
    	$datos=$check_regleta->fetch();
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La imagen del regleta que intenta eliminar no existe
            </div>
        ';
        exit();
    }
    $check_regleta=null;


    /* Directorios de imagenes */
	$img_dir='../img/regleta/';

	/* Cambiando permisos al directorio */
	chmod($img_dir, 0777);


	/* Eliminando la imagen */
	if(is_file($img_dir.$datos['regleta_foto'])){

		chmod($img_dir.$datos['regleta_foto'], 0777);

		if(!unlink($img_dir.$datos['regleta_foto'])){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                Error al intentar eliminar la imagen del regleta, por favor intente nuevamente
	            </div>
	        ';
	        exit();
		}
	}


	/*== Actualizando datos ==*/
    $actualizar_regleta=conexion();
    $actualizar_regleta=$actualizar_regleta->prepare("UPDATE regleta SET regleta_foto=:foto WHERE regleta_id=:id");

    $marcadores=[
        ":foto"=>"",
        ":id"=>$power_strip_id
    ];

    if($actualizar_regleta->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡IMAGEN O FOTO ELIMINADA!</strong><br>
                La imagen del regleta ha sido eliminada exitosamente, pulse Aceptar para recargar los cambios.

                <p class="has-text-centered pt-5 pb-5">
                    <a href="index.php?vista=power_strip_img&power_strip_id_up='.$power_strip_id.'" class="button is-link is-rounded">Aceptar</a>
                </p">
            </div>
        ';
    }else{
        echo '
            <div class="notification is-warning is-light">
                <strong>¡IMAGEN O FOTO ELIMINADA!</strong><br>
                Ocurrieron algunos inconvenientes, sin embargo la imagen del regleta ha sido eliminada, pulse Aceptar para recargar los cambios.

                <p class="has-text-centered pt-5 pb-5">
                    <a href="index.php?vista=power_strip_img&power_strip_id_up='.$power_strip_id.'" class="button is-link is-rounded">Aceptar</a>
                </p">
            </div>
        ';
    }
    $actualizar_regleta=null;
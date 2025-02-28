<?php
    require_once "main.php";

	/*== Almacenando datos ==*/
    $power_strip_id=limpiar_cadena($_POST['img_up_id']);

    /*== Verificando regleta ==*/
    $check_regleta=conexion();
    $check_regleta=$check_regleta->query("SELECT * FROM regleta WHERE regleta_id='$power_strip_id'");

    if($check_regleta->rowCount()==1){
        $datos=$check_regleta->fetch();
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La imagen del regleta que intenta actualizar no existe
            </div>
        ';
        exit();
    }
    $check_regleta=null;


    /*== Comprobando si se ha seleccionado una imagen ==*/
    if($_FILES['regleta_foto']['name']=="" || $_FILES['regleta_foto']['size']==0){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No ha seleccionado ninguna imagen o foto
            </div>
        ';
        exit();
    }


    /* Directorios de imagenes */
    $img_dir='../img/regleta/';


    /* Creando directorio de imagenes */
    if(!file_exists($img_dir)){
        if(!mkdir($img_dir,0777)){
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    Error al crear el directorio de imagenes
                </div>
            ';
            exit();
        }
    }


    /* Cambiando permisos al directorio */
    chmod($img_dir, 0777);


    /* Comprobando formato de las imagenes */
    if(mime_content_type($_FILES['regleta_foto']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['regleta_foto']['tmp_name'])!="image/png"){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La imagen que ha seleccionado es de un formato que no está permitido
            </div>
        ';
        exit();
    }


    /* Comprobando que la imagen no supere el peso permitido */
    if(($_FILES['regleta_foto']['size']/1024)>3072){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La imagen que ha seleccionado supera el límite de peso permitido
            </div>
        ';
        exit();
    }


    /* extencion de las imagenes */
    switch(mime_content_type($_FILES['regleta_foto']['tmp_name'])){
        case 'image/jpeg':
          $img_ext=".jpg";
        break;
        case 'image/png':
          $img_ext=".png";
        break;
    }

    /* Nombre de la imagen */
    $img_nombre=renombrar_fotos($datos['regleta_nombre']);

    /* Nombre final de la imagen */
    $foto=$img_nombre.$img_ext;

    /* Moviendo imagen al directorio */
    if(!move_uploaded_file($_FILES['regleta_foto']['tmp_name'], $img_dir.$foto)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No podemos subir la imagen al sistema en este momento, por favor intente nuevamente
            </div>
        ';
        exit();
    }


    /* Eliminando la imagen anterior */
    if(is_file($img_dir.$datos['regleta_foto']) && $datos['regleta_foto']!=$foto){

        chmod($img_dir.$datos['regleta_foto'], 0777);
        unlink($img_dir.$datos['regleta_foto']);
    }


    /*== Actualizando datos ==*/
    $actualizar_regleta=conexion();
    $actualizar_regleta=$actualizar_regleta->prepare("UPDATE regleta SET regleta_foto=:foto WHERE regleta_id=:id");

    $marcadores=[
        ":foto"=>$foto,
        ":id"=>$power_strip_id
    ];

    if($actualizar_regleta->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡IMAGEN O FOTO ACTUALIZADA!</strong><br>
                La imagen del regleta ha sido actualizada exitosamente, pulse Aceptar para recargar los cambios.

                <p class="has-text-centered pt-5 pb-5">
                    <a href="index.php?vista=power_strip_img&power_strip_id_up='.$power_strip_id.'" class="button is-link is-rounded">Aceptar</a>
                </p">
            </div>
        ';
    }else{

        if(is_file($img_dir.$foto)){
            chmod($img_dir.$foto, 0777);
            unlink($img_dir.$foto);
        }

        echo '
            <div class="notification is-warning is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No podemos subir la imagen al sistema en este momento, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_regleta=null;


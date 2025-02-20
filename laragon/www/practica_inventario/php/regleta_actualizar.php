<?php
	require_once "main.php";

	/*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['regleta_id']);


    /*== Verificando regleta ==*/
	$check_regleta=conexion();
	$check_regleta=$check_regleta->query("SELECT * FROM regleta WHERE regleta_id='$id'");

    if($check_regleta->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El regleta no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_regleta->fetch();
    }
    $check_regleta=null;


    /*== Almacenando datos ==*/
    $codigo=limpiar_cadena($_POST['regleta_codigo']);
	$nombre=limpiar_cadena($_POST['regleta_nombre']);

	$precio=limpiar_cadena($_POST['regleta_precio']);
	$stock=limpiar_cadena($_POST['regleta_stock']);
	$categoria=limpiar_cadena($_POST['regleta_categoria']);


	/*== Verificando campos obligatorios ==*/
    if($codigo=="" || $nombre=="" || $precio=="" || $stock=="" || $categoria==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[a-zA-Z0-9- ]{1,70}",$codigo)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO de BARRAS no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9.]{1,25}",$precio)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PRECIO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9]{1,25}",$stock)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El STOCK no coincide con el formato solicitado
            </div>
        ';
        exit();
    }


    /*== Verificando codigo ==*/
    if($codigo!=$datos['regleta_codigo']){
	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT regleta_codigo FROM regleta WHERE regleta_codigo='$codigo'");
	    if($check_codigo->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El CODIGO de BARRAS ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_codigo=null;
    }


    /*== Verificando nombre ==*/
    if($nombre!=$datos['regleta_nombre']){
	    $check_nombre=conexion();
	    $check_nombre=$check_nombre->query("SELECT regleta_nombre FROM regleta WHERE regleta_nombre='$nombre'");
	    if($check_nombre->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_nombre=null;
    }


    /*== Verificando categoria ==*/
    if($categoria!=$datos['categoria_id']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT categoria_id FROM categoria WHERE categoria_id='$categoria'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }


    /*== Actualizando datos ==*/
    $actualizar_regleta=conexion();
    $actualizar_regleta=$actualizar_regleta->prepare("UPDATE regleta SET regleta_codigo=:codigo,regleta_nombre=:nombre,regleta_precio=:precio,regleta_stock=:stock,categoria_id=:categoria WHERE regleta_id=:id");

    $marcadores=[
        ":codigo"=>$codigo,
        ":nombre"=>$nombre,
        ":precio"=>$precio,
        ":stock"=>$stock,
        ":categoria"=>$categoria,
        ":id"=>$id
    ];


    if($actualizar_regleta->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡regleta ACTUALIZADO!</strong><br>
                El regleta se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el regleta, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_regleta=null;
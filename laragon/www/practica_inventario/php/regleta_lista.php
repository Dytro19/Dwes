<?php
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";

	$campos="regleta.regleta_id,regleta.regleta_codigo,regleta.regleta_nombre,regleta.regleta_precio,regleta.regleta_stock,regleta.regleta_foto,regleta.categoria_id,regleta.usuario_id,categoria.categoria_id,categoria.categoria_nombre,usuario.usuario_id";

	if(isset($busqueda) && $busqueda!=""){

		$consulta_datos="SELECT $campos FROM regleta INNER JOIN categoria ON regleta.categoria_id=categoria.categoria_id INNER JOIN usuario ON regleta.usuario_id=usuario.usuario_id WHERE regleta.regleta_codigo LIKE '%$busqueda%' OR regleta.regleta_nombre LIKE '%$busqueda%' ORDER BY regleta.regleta_nombre ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(regleta_id) FROM regleta WHERE regleta_codigo LIKE '%$busqueda%' OR regleta_nombre LIKE '%$busqueda%'";

	}elseif($categoria_id>0){

		$consulta_datos="SELECT $campos FROM regleta INNER JOIN categoria ON regleta.categoria_id=categoria.categoria_id INNER JOIN usuario ON regleta.usuario_id=usuario.usuario_id WHERE regleta.categoria_id='$categoria_id' ORDER BY regleta.regleta_nombre ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(regleta_id) FROM regleta WHERE categoria_id='$categoria_id'";

	}else{

		$consulta_datos="SELECT $campos FROM regleta INNER JOIN categoria ON regleta.categoria_id=categoria.categoria_id INNER JOIN usuario ON regleta.usuario_id=usuario.usuario_id ORDER BY regleta.regleta_nombre ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(regleta_id) FROM regleta";

	}

	$conexion=conexion();

	$datos = $conexion->query($consulta_datos);
	$datos = $datos->fetchAll();

	$total = $conexion->query($consulta_total);
	$total = (int) $total->fetchColumn();

	$Npaginas =ceil($total/$registros);

	if($total>=1 && $pagina<=$Npaginas){
		$contador=$inicio+1;
		$pag_inicio=$inicio+1;
		foreach($datos as $rows){
			$tabla.='
				<article class="media">
			        <figure class="media-left">
			            <p class="image is-64x64">';
			            if(is_file("./img/regleta/".$rows['regleta_foto'])){
			            	$tabla.='<img src="./img/regleta/'.$rows['regleta_foto'].'">';
			            }else{
			            	$tabla.='<img src="./img/regleta.png">';
			            }
			   $tabla.='</p>
			        </figure>
			        <div class="media-content">
			            <div class="content">
			              <p>
			                <strong>'.$contador.' - '.$rows['regleta_nombre'].'</strong><br>
			                <strong>CODIGO:</strong> '.$rows['regleta_codigo'].', <strong>PRECIO:</strong> $'.$rows['regleta_precio'].', <strong>STOCK:</strong> '.$rows['regleta_stock'].', <strong>CATEGORIA:</strong> '.$rows['categoria_nombre'].', <strong>REGISTRADO POR:</strong> '.$rows['usuario_usuario'].'
			              </p>
			            </div>
			            <div class="has-text-right">
			                <a href="index.php?vista=power_strip_img&power_strip_id_up='.$rows['regleta_id'].'" class="button is-link is-rounded is-small">Imagen</a>
			                <a href="index.php?vista=power_strip_update&power_strip_id_up='.$rows['regleta_id'].'" class="button is-success is-rounded is-small">Actualizar</a>
			                <a href="'.$url.$pagina.'&power_strip_id_del='.$rows['regleta_id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
			            </div>
			        </div>
			    </article>

			    <hr>
            ';
            $contador++;
		}
		$pag_final=$contador-1;
	}else{
		if($total>=1){
			$tabla.='
				<p class="has-text-centered" >
					<a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
						Haga clic acá para recargar el listado
					</a>
				</p>
			';
		}else{
			$tabla.='
				<p class="has-text-centered" >No hay registros en el sistema</p>
			';
		}
	}

	if($total>0 && $pagina<=$Npaginas){
		$tabla.='<p class="has-text-right">Mostrando regletas <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>total de '.$total.'</strong></p>';
	}

	$conexion=null;
	echo $tabla;

	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,$Npaginas,$url,7);
	}
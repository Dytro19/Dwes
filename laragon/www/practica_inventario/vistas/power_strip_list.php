<div class="container is-fluid mb-6">
    <h1 class="title">Regletas</h1>
    <h2 class="subtitle">Lista de Regletas</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar regleta #
        if(isset($_GET['power_strip_id_del'])){
            require_once "./php/regleta_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $categoria_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=power_strip_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador regleta #
        require_once "./php/regleta_lista.php";
    ?>
</div>
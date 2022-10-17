<?php
/* Smarty version 3.1.36, created on 2022-10-18 01:00:49
  from 'C:\xampp\htdocs\TpeWeb2\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634ddea17ea3f5_01061346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd318c89fef8d1ed7a1e149e3532ab2979def17c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\pelicula.tpl',
      1 => 1666047441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ddea17ea3f5_01061346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-2 mb-5 rounded shadow">
    <div class="container bg-dark my-3 d-flex justify-content-between">
        <h2><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</h2>

        <?php if ($_smarty_tpl->tpl_vars['status']->value == true) {?>

            
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#borrar<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" title="Borrar"><i class="fas fa-trash-alt"></i></button>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#editar<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" data-bs-whatever="@mdo" title="Editar"><i
                        class="far fa-edit"></i></button>
            </div>
            
            

            <div class="modal fade " id="borrar<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" tabindex="-1" aria-labelledby="borrarLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="borrarLabel">¿Estás seguro que quieres eliminar la
                                película
                                "<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
"?</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close" title="Cerrar"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                            <a href="eliminarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" class="btn btn-danger">Confirmar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="modal fade " id="editar<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" tabindex="-1" aria-labelledby="editarLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editarLabel">¿Estás seguro que quiere editar la
                                película
                                "<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
"?</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close" title="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="editarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="titulo" class="col-form-label">Titulo:</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="duracion" class="col-form-label">Duración:</label>
                                    <input type="number" class="form-control" name="duracion" id="duracion"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->duracion;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="anio" class="col-form-label">Año:</label>
                                    <input type="number" class="form-control" name="anio" id="anio"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->anio;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sinopsis" class="col-form-label">Sinopsis:</label>
                                    <textarea class="form-control" name="sinopsis" id="sinopsis"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->sinopsis;?>
" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="director" class="col-form-label">Director:</label>
                                    <input type="text" class="form-control" name="director" id="director"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="elenco" class="col-form-label">Elenco:</label>
                                    <input type="text" class="form-control" name="elenco" id="elenco"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->elenco;?>
" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_genero" class="col-form-label">Género:</label>

                                    <select name="id_genero" class="form-select">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['generos']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['genero']->value->id == $_smarty_tpl->tpl_vars['pelicula']->value->id_genero) {?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="col-form-label">Video:</label>
                                    <input type="file" class="form-control" name="video" id="video"
                                        value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->video;?>
" required>
                                </div>

                                <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center" role="group">
                                    <button type="submit" class="btn btn-primary m-1 mt-3">Confirmar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
        <?php }?>
    </div>

    <div class="card mb-3 bg-dark">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" class="card-img-top" alt="..." height="408px" width="286px" />
            </div>
            <div class="col-md-9">
                <div class="card-body">

                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->sinopsis;?>
</p>
                    <div class="d-flex">
                        <p class="card-text"><small><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->duracion;?>
 min.</small></p>
                        <p class="card-text mx-4"><small><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->anio;?>
</small></p>
                    </div>
                    <p class="card-text"><small>Director: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</small></p>
                    <p class="card-text"><small>Actores: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->elenco;?>
</small></p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['genero']->value->id == $_smarty_tpl->tpl_vars['pelicula']->value->id_genero) {?>
                            <p class="card-text"><small>Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</small></p>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            </div>
        </div>
    </div>

    <div>
        <video width="1295" class="video-js vjs-19-9 vjs-big-play-button vjs-big-play-centered" data-setup="{}" controls
            id="fm-video">
            <source src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->video;?>
" type="video/mp4">
        </video>
    </div>
</div>

<style>
    .video-js .vjs-big-play-button {

        width: 45px;
        height: 45px;
        background-color: rgba(252, 223, 0, 0.814);
        opacity: .6;
        border: none;
        color: rgb(201, 17, 17);
        border-radius: 50%;
    }

    .video-js .vjs-play-progress {
        background-color: rgba(252, 223, 0, 0.814);
    }
</style>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

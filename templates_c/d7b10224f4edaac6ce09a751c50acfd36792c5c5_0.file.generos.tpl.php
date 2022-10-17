<?php
/* Smarty version 3.1.36, created on 2022-10-18 01:01:29
  from 'C:\xampp\htdocs\TpeWeb2\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634ddec9d9fbf0_71396407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b10224f4edaac6ce09a751c50acfd36792c5c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\generos.tpl',
      1 => 1666047324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ddec9d9fbf0_71396407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container text-center my-5 ">

    <div class="container bg-dark mb-4 d-flex justify-content-between">
        <h2>Generos</h2>
        <?php if ($_smarty_tpl->tpl_vars['status']->value == true) {?>
            
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar"
                data-bs-whatever="@mdo" title="Agregar genero"><i class="fas fa-plus"></i></button>


            <div class="modal fade " id="agregar" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="agregarLabel">Agregar genero</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close" title="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insertarGenero" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nombre" class="col-form-label">Nombre: </label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen" required>
                                </div>

                                <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center" role="group">
                                    <button type="submit" class="btn btn-success m-1 mt-3">Agregar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                                <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['generos']->value)) {?>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <div class="col">
                    <div class="card bg-dark my-3" style="width: 18rem;">
                        <a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['genero']->value->imagen;?>
" class="card-img-top mb-2" alt="..."
                                height="408px" width="286px" /></a>
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == true) {?>

                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#borrar<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" title="Borrar"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#editar<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" data-bs-whatever="@mdo" title="Editar"><i
                                        class="far fa-edit"></i></button>
                            </div>
                            
                            
                            <div class="modal fade " id="borrar<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" tabindex="-1" aria-labelledby="borrarLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="borrarLabel">¿Estás seguro que quieres eliminar el
                                                genero
                                                "<?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
"?</h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Close" title="Cerrar"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" class="btn btn-danger">Confirmar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                                                        <div class="modal fade " id="editar<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" tabindex="-1" aria-labelledby="editarLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content bg-dark text-white">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editarLabel">¿Estás seguro que quiere editar el genero
                                                "<?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
"?</h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Close" title="Cerrar"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="editarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                                        value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                                    <input type="file" class="form-control" name="imagen" id="imagen"
                                                        value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->imagen;?>
" required>
                                                </div>

                                                <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center"
                                                    role="group">
                                                    <button type="submit" class="btn btn-primary m-1 mt-3">Confirmar</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        <?php }?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

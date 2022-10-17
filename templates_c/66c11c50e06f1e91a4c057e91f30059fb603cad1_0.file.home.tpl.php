<?php
/* Smarty version 3.1.36, created on 2022-10-18 00:59:38
  from 'C:\xampp\htdocs\TpeWeb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634dde5ad31668_88773514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c11c50e06f1e91a4c057e91f30059fb603cad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\home.tpl',
      1 => 1666047393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dde5ad31668_88773514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container text-center my-5 d-flex">
    <div class="container bg-dark mb-5 d-flex justify-content-between">
                <?php if (!empty($_smarty_tpl->tpl_vars['generos']->value)) {?>
            <div id="carouselExampleInterval" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner ">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index', 'gen', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index'] : null) == 0) {?>
                            <div class="carousel-item active" data-bs-interval="10000">
                                <a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['genero']->value->imagen;?>
" class="d-block w-100" alt="..." /></a>
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item" data-bs-interval="10000">
                                <a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['genero']->value->imagen;?>
" class="d-block w-100" alt="..." /></a>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        <?php }?>
    </div>
        <div class="container bg-dark mb-5 d-flex justify-content-between">
        <?php if (!empty($_smarty_tpl->tpl_vars['peliculas']->value)) {?>

            <div id="carouselExampleInterval_P" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula', false, 'index', 'gen', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gen']->value['index'] : null) == 0) {?>
                            <div class="carousel-item active" data-bs-interval="10000">
                                <a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" class="d-block w-100"
                                        alt="..." /></a>
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item" data-bs-interval="10000">
                                <a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" class="d-block w-100"
                                        alt="..." /></a>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval_P"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval_P"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        <?php }?>
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

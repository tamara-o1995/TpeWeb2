<?php
/* Smarty version 3.1.36, created on 2022-10-18 00:59:38
  from 'C:\xampp\htdocs\TpeWeb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634dde5af04bc2_38843151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4716436a8feee83fe50ee04555780af960ff6a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\header.tpl',
      1 => 1666047364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dde5af04bc2_38843151 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/normalize.css" type="text/css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    <?php echo '</script'; ?>
>

    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="//vjs.zencdn.net/7.10.2/video.min.js"><?php echo '</script'; ?>
>

    <base href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
    <title>Sala 1</title>
</head>

<body class=" bg-dark text-white">

    <nav class="navbar navbar-expand-lg d-flex justify-content-between bg-opacity-75 bg-dark bg-gradient sticky-top"
        style="background-color: #080f28">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
uploads/logo_cine.png" alt="..." height="60px"
                    width="60px" /></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex align-items-center ">
                    <li class="nav-item ms-3 ">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="Home">Inicio</a>
                    </li>
                    <li class="nav-item ms-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-warning dropdown-toggle text-danger" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Generos
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index', 'gen', array (
));
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['index']->value < 6) {?>
                                        <li><a class="dropdown-item" href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</a></li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <li><a class="dropdown-item" href="generos">Ver todos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-warning dropdown-toggle text-danger" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Películas
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="estrenos">Estrenos</a></li>
                                <li><a class="dropdown-item" href="peliculas">Películas</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid justify-content-end">
            <?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
                <a href="logout"><button type="button" class="btn btn-outline-light ms-3">Salir</button></a>
            <?php } else { ?>
                <a href="login"><button type="button" class="btn btn-outline-light ms-3">Entrar</button></a>
                <a href="registro"><button type="button" class="btn btn-outline-warning ms-3">Registro</button></a>
            <?php }?>
        </div>
</nav><?php }
}

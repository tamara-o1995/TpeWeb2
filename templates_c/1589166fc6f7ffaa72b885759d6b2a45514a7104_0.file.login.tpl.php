<?php
/* Smarty version 3.1.36, created on 2022-10-18 01:00:35
  from 'C:\xampp\htdocs\TpeWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634dde93490a28_54097692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1589166fc6f7ffaa72b885759d6b2a45514a7104' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\login.tpl',
      1 => 1666047405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dde93490a28_54097692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5">
    <h2>Login</h2>
    <form action="verify" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Usuario</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <input type="submit" class="btn btn-primary" value="login">
    </form>
    <h4 class=" "><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

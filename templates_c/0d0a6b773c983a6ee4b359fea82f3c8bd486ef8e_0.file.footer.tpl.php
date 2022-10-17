<?php
/* Smarty version 3.1.36, created on 2022-10-18 00:59:39
  from 'C:\xampp\htdocs\TpeWeb2\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634dde5b0d9b93_33567411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d0a6b773c983a6ee4b359fea82f3c8bd486ef8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\footer.tpl',
      1 => 1666047196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dde5b0d9b93_33567411 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var reproductor = videojs('fm-video', {
        fluis: true;
    })
<?php echo '</script'; ?>
>
</body>

</html>

<footer class="d-flex justify-content-around">
    <div
        class="d-flex justify-content-center justify-content-evenly align-items-center py-3 my-5 border-top border-warning">
        <div class="col-md-3 d-flex align-items-center">
            <a class="navbar-brand mx-3" href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
uploads/logo_cine_blanco_y_negro.png" alt="..."
                    height="40px" width="40px" /></i></a>
        </div>
        <span class="col-md-6 text-muted text-center d-flex ">© 2022 Play Movie - Peliculas Online. Todos los derechos
            reservados.</span>

        <ul class="nav col-md-3 justify-content-end list-unstyled d-flex mx-4">
            <li class="ms-4"><a class="text-muted" href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="ms-4"><a class="text-muted" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="ms-4"><a class="text-muted" href="#"><i class="fab fa-twitter-square"></i></a></li>
        </ul>

    </div>

</footer><?php }
}

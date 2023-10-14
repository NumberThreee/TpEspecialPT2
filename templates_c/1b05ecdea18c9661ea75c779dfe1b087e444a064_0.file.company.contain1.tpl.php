<?php
/* Smarty version 4.2.1, created on 2023-10-15 00:28:33
  from 'D:\XAMP\htdocs\TP2WEB2SegEntrega\TpEspecialPT2\templates\company.contain1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b16118019d4_87947695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b05ecdea18c9661ea75c779dfe1b087e444a064' => 
    array (
      0 => 'D:\\XAMP\\htdocs\\TP2WEB2SegEntrega\\TpEspecialPT2\\templates\\company.contain1.tpl',
      1 => 1697242396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b16118019d4_87947695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="section_container">
        <section class="company">
            <div class="imagenCompany">
                <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value->img;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['company']->value->nombre;?>
">
            </div>
            <div class="textCompany">
                <p>
                <?php echo $_smarty_tpl->tpl_vars['company']->value->info;?>

                </p>
            </div>
        </section>
        <div class="bton_ver_mas_container">
            <button class="btnVer_mas"> <a href=""> Ver más </a></button>
        </div>
        <hr>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

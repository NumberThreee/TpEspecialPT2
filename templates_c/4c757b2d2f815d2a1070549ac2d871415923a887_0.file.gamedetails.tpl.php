<?php
/* Smarty version 4.2.1, created on 2023-10-16 05:18:16
  from 'C:\xampp\htdocs\TpEspecialPT2\templates\gamedetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cab78034082_45239849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c757b2d2f815d2a1070549ac2d871415923a887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpEspecialPT2\\templates\\gamedetails.tpl',
      1 => 1697426275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652cab78034082_45239849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</h2>

<ul>
  <li>Genero: <?php echo $_smarty_tpl->tpl_vars['game']->value->genero;?>
</li>
  <li>Precio: <?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</li>
    <li>Material:<?php echo $_smarty_tpl->tpl_vars['game']->value->material;?>
</li>
  <li>Descripcion:<?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</li>
  <li><?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
</li>
  <li>Desarrollador:<?php echo $_smarty_tpl->tpl_vars['game']->value->desarrollador;?>
</li> 
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

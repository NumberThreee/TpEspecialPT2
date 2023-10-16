<?php
/* Smarty version 4.2.1, created on 2023-10-17 01:26:18
  from 'C:\xampp\htdocs\TpEspecialPT2\templates\games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652dc69a393660_69561567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e179ce1c67f8073a7115252068edf331aba765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpEspecialPT2\\templates\\games.tpl',
      1 => 1697498723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652dc69a393660_69561567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Listado de Juegos </h1>   

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
    <div class="container_cards">
    <div class="card_container">
        <div class="img_card">
            <img src="../images/games/Mortal_Kombat_1.webp" alt="mk1">         </div>
        <div>
            <h4>Juego: <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</h4>
            <p>Compañia: <?php echo $_smarty_tpl->tpl_vars['game']->value->desarrollador;?>
</p>            
            
            <button> <a href="router.php?action=verMas/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"> ver mas </a></button>               <button> <a href="borrarJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">borrar</a></button>
            <button> <a href="modificaJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">modificar</a></button>
        </div>
    </div>
</div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

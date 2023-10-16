<?php
/* Smarty version 4.2.1, created on 2023-10-17 00:53:20
  from 'C:\xampp\htdocs\TpEspecialPT2\templates\formalta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652dbee02b6cb5_51020885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3ec4af308c34fc80b13bde7396abd2d91b3216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpEspecialPT2\\templates\\formalta.tpl',
      1 => 1697496793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652dbee02b6cb5_51020885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="insertar" method="POST" class="my-4">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="titulo" type="text" class="form-control">
                </div>
            </div>
    
            <div class="col-3">
                <div class="form-group">
                    <label>Prioridad</label>
                    <select name="prioridad" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
    
<?php }
}

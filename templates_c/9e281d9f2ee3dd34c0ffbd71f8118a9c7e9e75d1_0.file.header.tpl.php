<?php
/* Smarty version 4.2.1, created on 2023-10-16 18:23:59
  from 'C:\xampp\htdocs\TpEspecialPT2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d639f284d88_09858273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e281d9f2ee3dd34c0ffbd71f8118a9c7e9e75d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpEspecialPT2\\templates\\header.tpl',
      1 => 1697473435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d639f284d88_09858273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Orbitron&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/f810954eb8.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css\stryle.css">
    <title>Document</title>


</head>

<body>
    <header>
        <div class="header_div_uno">
            <img src="../images/lobo.png" alt="lobo" id="logo">
            <h1><span>I</span>nfo<span class="g_logo">G</span>ame<span>s</span></h1>
        </div>
        <div class="header_div_dos">
            <ul class="lista_plataformas">
                <li class="items_lista">
                    <h3><i class="fa-brands fa-steam"></i></h3>
                </li>
                <li class="items_lista">
                    <h3><i class="fa-brands fa-xbox"></i></h3>
                </li>
                <li class="items_lista">
                    <h3><i class="fa-brands fa-playstation"></i></h3>
                </li>
            </ul>
        </div>

    </header>
    <nav>
        <div class="divBox">
            <button class="btn_nav"> <a href="home" class="a_nav"> Home </a> </button>
        </div>
        <div class="divBox">
            <button class="btn_nav"> <a href="agregarJuego" class="a_nav"> Agregar Juego </a> </button>
        </div>
        <div class="divBox">
            <button class="btn_nav"> <a href="games" class="a_nav"> Todos los Juegos </a> </button>
        </div>
        <div class="divBox">
            <button class="btn_nav"> <a href="company" class="a_nav"> Todas las Companias </a> </button>
        </div>

        <div class="divBox">
            <button class="btn_nav" id="btn-filtrar"><a href ="filtrar" class= "a_nav">Filtrar juegos por compañia</a></button>
            
        </div>
        <div class="divBox">
            <button class="btn_nav"><a href="../router.php?action=login" class="a_nav"> Login </a> </button>
        </div>

        <div class="divBox">
            <button class="btn_nav"><a href="../router.php?action=logout" class="a_nav"> Logout </a> </button>
        </div>
</nav><?php }
}

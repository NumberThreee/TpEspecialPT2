
{include file= "header.tpl"}

<h2>{$game->nombre}</h2>

<ul>
  <li>Genero: {$game->genero}</li>
  <li>Precio: {$game->precio}</li>
  {*<li>Año:{$game->año}</li> LO SACO PORQUE NO ME RECONOCE LA LETRA Ñ!!!!  *}
  <li>Material:{$game->material}</li>
  <li>Descripcion:{$game->descripcion}</li>
  <li>{$game->imagen}</li>
  <li>Desarrollador:{$game->desarrollador}</li> {*OJO aca me va a traer un numero, y necesito mostrar el NOMBRE de la compañia desarrolladora*}

</ul>

{include file="footer.tpl"}



{include file= "header.tpl"}

<h1> Listado de Juegos </h1>   

{foreach from=$games item=$game}
    <div class="container_cards">
    <div class="card_container">
        <div class="img_card">
            <img src="../images/games/Mortal_Kombat_1.webp" alt="mk1"> {*-- la imagen viene de la db-->*}
        </div>
        <div>
            <h4>Juego: {$game->nombre}</h4>
            <p>Compañia: {$game->desarrollador}</p> {* Aca creo que no funcionaria tengo que usar las dos tablas // Funciona porque hice un INNER JOIN*}
           
            
            <button> <a href="router.php?action=verMas/{$game->id}"> ver mas </a></button>   {*ACA PIERDO LA URL AMIGABLE, SI LA OBTENGO PIERDO EL ESTILO CSS :(!!!!*}
            <button> <a href="borrarJuego/{$game->id}">borrar</a></button>
            <button> <a href="modificaJuego/{$game->id}">modificar</a></button>
        </div>
    </div>
</div>

{/foreach}

{include file="footer.tpl"}
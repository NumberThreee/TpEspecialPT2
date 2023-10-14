{include file="header.tpl"}

<section class="section_container">
        <section class="company">
            <div class="imagenCompany">
                <img src="{$company->img}" alt="{$company->nombre}">
            </div>
            <div class="textCompany">
                <p>
                {$company->info}
                </p>
            </div>
        </section>
        <div class="bton_ver_mas_container">
            <button class="btnVer_mas"> <a href=""> Ver más </a></button>
        </div>
        <hr>
</section>

{include file="footer.tpl"}
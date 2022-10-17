{include file="header.tpl"}

<div class="container text-center my-5 d-flex">
    <div class="container bg-dark mb-5 d-flex justify-content-between">
        {* CAROUSEL GENEROS *}
        {if !empty($generos)}
            <div id="carouselExampleInterval" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner ">

                    {foreach from=$generos key=index item=genero name=gen}
                        {if $smarty.foreach.gen.index eq 0}
                            <div class="carousel-item active" data-bs-interval="10000">
                                <a href="genero/{$genero->id}"><img src="{$genero->imagen}" class="d-block w-100" alt="..." /></a>
                            </div>
                        {else}
                            <div class="carousel-item" data-bs-interval="10000">
                                <a href="genero/{$genero->id}"><img src="{$genero->imagen}" class="d-block w-100" alt="..." /></a>
                            </div>
                        {/if}
                    {/foreach}

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        {/if}
    </div>
    {* FIN CAROUSEL GENEROS *}
    <div class="container bg-dark mb-5 d-flex justify-content-between">
        {if !empty($peliculas)}

            <div id="carouselExampleInterval_P" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner">

                    {foreach from=$peliculas key=index item=pelicula name=gen}
                        {if $smarty.foreach.gen.index eq 0}
                            <div class="carousel-item active" data-bs-interval="10000">
                                <a href="pelicula/{$pelicula->id}"><img src="{$pelicula->imagen}" class="d-block w-100"
                                        alt="..." /></a>
                            </div>
                        {else}
                            <div class="carousel-item" data-bs-interval="10000">
                                <a href="pelicula/{$pelicula->id}"><img src="{$pelicula->imagen}" class="d-block w-100"
                                        alt="..." /></a>
                            </div>
                        {/if}
                    {/foreach}

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval_P"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval_P"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        {/if}
    </div>
    {* FIN CAROUSEL PELICULAS *}
</div>
{include file="footer.tpl"}
{include file="header.tpl" }

<div class="container text-center my-5">
    <div class="container bg-dark mb-5 d-flex justify-content-between">
        <h2>Películas</h2>
        {if $status eq true}

            {* ----------------------------------------- MODAL AGREGAR ---------------------------------------*}
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar"
                data-bs-whatever="@mdo" title="Agregar película"><i class="fas fa-plus"></i></button>


            <div class="modal fade " id="agregar" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="agregarLabel">Agregar película</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close" title="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insertarPelicula" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="titulo" class="col-form-label">Título: : </label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen" required>
                                </div>
                                <div class="mb-3">
                                    <label for="duracion" class="col-form-label">Duración: : </label>
                                    <input type="number" class="form-control" name="duracion" id="duracion" required>
                                </div>
                                <div class="mb-3">
                                    <label for="anio" class="col-form-label">Año:</label>
                                    <input type="number" class="form-control" name="anio" id="anio" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sinopsis" class="col-form-label">Sinopsis:</label>
                                    <textarea class="form-control" name="sinopsis" id="sinopsis" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="director" class="col-form-label">Director:</label>
                                    <input type="text" class="form-control" name="director" id="director" required>
                                </div>
                                <div class="mb-3">
                                    <label for="elenco" class="col-form-label">Elenco:</label>
                                    <input type="text" class="form-control" name="elenco" id="elenco" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_genero" class="col-form-label">Genero:</label>
                                    <select name="id_genero" class="form-select" required>
                                        {if !empty($generos)}
                                            {foreach from=$generos item=genero}
                                                <option value="{$genero->id}">{$genero->nombre}</option>
                                            {/foreach}
                                        {/if}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="col-form-label">Video:</label>
                                    <input type="file" class="form-control" name="video" id="video" required>
                                </div>

                                <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center" role="group">
                                    <button type="submit" class="btn btn-success m-1 mt-3">Agregar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        {/if}
    </div>
    {if !empty($peliculas)}

        <div class="container text-center">
            <div class="row">
                {foreach from=$peliculas item=pelicula}
                    <div class="col">
                        <div class="card bg-dark my-3" style="width: 18rem;">
                            <a href="pelicula/{$pelicula->id}"><img src="{$pelicula->imagen}" class="card-img-top" alt="..."
                                    height="408px" width="286px" /></a>
                            <div class="card-body d-flex align-items-center justify-content-center" style="height:75px;">
                                <h5 class="card-title">{$pelicula->titulo}</h5>
                            </div>
                            {if $status eq true}

                                {* BOTONES MODAL *}
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#borrar{$pelicula->id}" title="Borrar"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#editar{$pelicula->id}" data-bs-whatever="@mdo" title="Editar"><i
                                            class="far fa-edit"></i></button>
                                </div>
                                {* FIN BOTONES MODAL *}

                                {* MODAL PARA BORRAR *}

                                <div class="modal fade " id="borrar{$pelicula->id}" tabindex="-1" aria-labelledby="borrarLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="borrarLabel">¿Estás seguro que quieres eliminar la
                                                    película
                                                    "{$pelicula->titulo}"?</h1>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                    aria-label="Close" title="Cerrar"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <a href="eliminarPelicula/{$pelicula->id}" class="btn btn-danger">Confirmar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {*FIN DEL MODAL PARA BORRAR *}

                                {* MODAL PARA EDITAR *}

                                <div class="modal fade " id="editar{$pelicula->id}" tabindex="-1" aria-labelledby="editarLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content bg-dark text-white">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="editarLabel">¿Estás seguro que quiere editar la
                                                    película
                                                    "{$pelicula->titulo}"?</h1>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                    aria-label="Close" title="Cerrar"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="editarPelicula/{$pelicula->id}" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class=" mb-3">
                                                        <label for="titulo" class="col-form-label">Titulo:</label>
                                                        <input type="text" class="form-control" name="titulo" id="titulo"
                                                            value="{$pelicula->titulo}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="imagen" class="col-form-label">Imagen:</label>
                                                        <input type="file" class="form-control" name="imagen" id="imagen"
                                                            value="{$pelicula->imagen}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="duracion" class="col-form-label">Duración:</label>
                                                        <input type="number" class="form-control" name="duracion" id="duracion"
                                                            value="{$pelicula->duracion}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="anio" class="col-form-label">Año:</label>
                                                        <input type="number" class="form-control" name="anio" id="anio"
                                                            value="{$pelicula->anio}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sinopsis" class="col-form-label">Sinopsis:</label>
                                                        <textarea class="form-control" name="sinopsis" id="sinopsis"
                                                            value="{$pelicula->sinopsis}" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="director" class="col-form-label">Director:</label>
                                                        <input type="text" class="form-control" name="director" id="director"
                                                            value="{$pelicula->director}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="elenco" class="col-form-label">Elenco:</label>
                                                        <input type="text" class="form-control" name="elenco" id="elenco"
                                                            value="{$pelicula->elenco}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="id_genero" class="col-form-label">Género:</label>

                                                        <select name="id_genero" class="form-select">
                                                            {if !empty($generos)}
                                                                {foreach from=$generos item=genero}
                                                                    {if $genero->id eq $pelicula->id_genero}
                                                                        <option value="{$genero->id}" selected>{$genero->nombre}</option>
                                                                    {else}
                                                                        <option value="{$genero->id}">{$genero->nombre}</option>
                                                                    {/if}
                                                                {/foreach}
                                                            {/if}
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="video" class="col-form-label">Video:</label>
                                                        <input type="file" class="form-control" name="video" id="video"
                                                            value="{$pelicula->video}" required>
                                                    </div>

                                                    <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center"
                                                        role="group">
                                                        <button type="submit" class="btn btn-primary m-1 mt-3">Confirmar</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {*FIN DEL MODAL PARA EDITAR *}

                            {/if}
                        </div>
                    </div>
                {/foreach}
            </div>

        </div>

    {/if}
</div>

{include file="footer.tpl"}
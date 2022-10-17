{include file="header.tpl"}

<div class="container text-center my-5 ">

    <div class="container bg-dark mb-4 d-flex justify-content-between">
        <h2>Generos</h2>
        {if $status eq true}
            {* ----------------------------------------- MODAL AGREGAR ---------------------------------------*}

            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar"
                data-bs-whatever="@mdo" title="Agregar genero"><i class="fas fa-plus"></i></button>


            <div class="modal fade " id="agregar" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="agregarLabel">Agregar genero</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close" title="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insertarGenero" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nombre" class="col-form-label">Nombre: </label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen" required>
                                </div>

                                <div class="btn-group btn-group-lg m-0 mt-3 d-flex justify-content-center" role="group">
                                    <button type="submit" class="btn btn-success m-1 mt-3">Agregar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {* ----------------------------------- FIN MODAL AGREGAR -------------------------------------------- *}
            {* </div> *}
        {/if}
    </div>
    {if !empty($generos)}

        <div class="row">
            {foreach from=$generos item=genero}
                <div class="col">
                    <div class="card bg-dark my-3" style="width: 18rem;">
                        <a href="genero/{$genero->id}"><img src="{$genero->imagen}" class="card-img-top mb-2" alt="..."
                                height="408px" width="286px" /></a>
                        {if $status eq true}

                            {* BOTONES MODAL *}
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#borrar{$genero->id}" title="Borrar"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#editar{$genero->id}" data-bs-whatever="@mdo" title="Editar"><i
                                        class="far fa-edit"></i></button>
                            </div>
                            {* FIN BOTONES MODAL *}

                            {* MODAL PARA BORRAR *}

                            <div class="modal fade " id="borrar{$genero->id}" tabindex="-1" aria-labelledby="borrarLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="borrarLabel">¿Estás seguro que quieres eliminar el
                                                genero
                                                "{$genero->nombre}"?</h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Close" title="Cerrar"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="eliminarGenero/{$genero->id}" class="btn btn-danger">Confirmar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {*FIN DEL MODAL PARA BORRAR *}

                            {* MODAL PARA EDITAR *}
                            <div class="modal fade " id="editar{$genero->id}" tabindex="-1" aria-labelledby="editarLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content bg-dark text-white">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editarLabel">¿Estás seguro que quiere editar el genero
                                                "{$genero->nombre}"?</h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Close" title="Cerrar"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="editarGenero/{$genero->id}" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                                        value="{$genero->nombre}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="imagen" class="col-form-label">Imagen:</label>
                                                    <input type="file" class="form-control" name="imagen" id="imagen"
                                                        value="{$genero->imagen}" required>
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
    {/if}
</div>


{include file="footer.tpl"}
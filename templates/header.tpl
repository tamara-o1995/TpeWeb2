<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{$BASE_URL}css/style.css" type="text/css">
    <link rel="stylesheet" href="{$BASE_URL}css/normalize.css" type="text/css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>

    <base href="{$BASE_URL}">
    <title>Sala 1</title>
</head>

<body class=" bg-dark text-white">

    <nav class="navbar navbar-expand-lg d-flex justify-content-between bg-opacity-75 bg-dark bg-gradient sticky-top"
        style="background-color: #080f28">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="{$BASE_URL}uploads/logo_cine.png" alt="..." height="60px"
                    width="60px" /></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex align-items-center ">
                    <li class="nav-item ms-3 ">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="Home">Inicio</a>
                    </li>
                    <li class="nav-item ms-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-warning dropdown-toggle text-danger" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Generos
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                {foreach from=$generos key=index item=genero name=gen}
                                    {if $index lt 6}
                                        <li><a class="dropdown-item" href="genero/{$genero->id}">{$genero->nombre}</a></li>
                                    {/if}
                                {/foreach}
                                <li><a class="dropdown-item" href="generos">Ver todos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-warning dropdown-toggle text-danger" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Películas
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="estrenos">Estrenos</a></li>
                                <li><a class="dropdown-item" href="peliculas">Películas</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid justify-content-end">
            {if $status}
                <a href="logout"><button type="button" class="btn btn-outline-light ms-3">Salir</button></a>
            {else}
                <a href="login"><button type="button" class="btn btn-outline-light ms-3">Entrar</button></a>
                <a href="registro"><button type="button" class="btn btn-outline-warning ms-3">Registro</button></a>
            {/if}
        </div>
</nav>
<?php require "header.php"?>
<nav class="col-2 bg-light pe-3">
    <h1 class="h4 py-3 text-center text-primary">
        <img src="public/data/img/logo.png" alt="" class="" style="width: 80px;
    height: 70px;">
        <span class="d-none d-lg-inline">
       MOALI
</span>
    </h1>
<!--Start Controls-->
    <div class="list-group text-center text-lg-start">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item custom-p" href="logout">Logout</a></li>

            </ul>
        </div>


    </nav>
    </div>

    <div class="list-group text-center text-lg-start">
          <span class="list-group-item disabled d-none d-lg-block">
           <small style="font-weight: bolder;">CONTROLS</small>
          </span>
        <a href="admin" class="list-group-item list-group-item-action">
            <i class="fas fa-tachometer-alt"></i>
            <span class="d-none d-lg-inline">Dashboard</span>
        </a>
        <a href="post" class="list-group-item list-group-item-action">
            <i class="fas fa-newspaper"></i>
            <span class="d-none d-lg-inline">Post List</span>
        </a>

        <a href="destrictlist" class="list-group-item list-group-item-action">
            <i class="fas fa-th-list"></i>
            <span class="d-none d-lg-inline">Destrict List</span>

        </a>
        <a href="townlist" class="list-group-item list-group-item-action">
            <i class="fas fa-city"></i>
            <span class="d-none d-lg-inline">Town List</span>

        </a>

        <a href="damlist" class="list-group-item list-group-item-action">
            <i class="fas fa-water"></i>
            <span class="d-none d-lg-inline">Dam List</span>
        </a>
    </div>
<!--End Controls-->
<!--Start Actions-->
    <div class="list-group text-center text-lg-start mt-3">
<span class="list-group-item disabled d-none d-lg-block">
<small style="font-weight: bolder;">ACTIONS</small>
</span>
        <a href="new" class="list-group-item list-group-item-action">
            <i class="fas fa-network-wired"></i>
            <span class="d-none d-lg-inline">Post News</span>
        </a>
        <a href="destrict" class="list-group-item list-group-item-action">
            <i class="fas fa-chart-pie"></i>
            <span class="d-none d-lg-inline">Add Destrict</span>

        </a>
        <a href="addtown" class="list-group-item list-group-item-action">
            <i class="fas fa-city"></i>
            <span class="d-none d-lg-inline">Add Town</span>

        </a>
        <a href="dam" class="list-group-item list-group-item-action">
            <i class="fas fa-water"></i>
            <span class="d-none d-lg-inline">Add Dam</span>
        </a>
    </div>
<!--End Actions-->

</nav>


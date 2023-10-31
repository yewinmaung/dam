<?php require "views/componet/header.php" ?>
<body>
<div class="container-fluid">
    <div class="row g-0">
<?php require "views/componet/navbar.php"?>
<main class="col-10 bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="flex-fill"></div>
        <div class="navbar nav">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"
                   data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#" class="dropdown-item">User Profile</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">Logout</a>
                    </li>
                </ul>
            </li>

        </div>

    </nav>
    <div class="container-fluid mt-3 p-4">
        <div class="row flex-column flex-lg-row">
            <div class="">
                <form action="create" method="post" class="w-100 d-flex justify-content-center align-items-center">

                    <div class="card w-50 p-2">
                        <div class="row mb-3">

                            <div class="col-sm-10 w-100">
                                <input type="text" name="name" placeholder="Dam name" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 w-100">
                                <input type="text" name="time" placeholder="DD/MM/YYYY" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-10 w-100">
                                <input type="text" name="width" placeholder="L x W x H" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-10 w-100">
                                <textarea name="description" id="" cols="75" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3 w-100 d-flex justify-content-end">
                            <button type="reset" class="w-25 btn btn-outline-danger">Cancel</button>
                            <button type="submit" class="w-25 btn btn-outline-info">Create</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</main>


<?php require "views/componet/fooder.php" ?>
    </div>
</div></body>

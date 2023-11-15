<?php require "views/componet/header.php" ?>
<body>
<?php if (isset($_SESSION["user"])):?>

    <div class="container-fluid">
        <div class="row g-0">
            <?php require "views/componet/navbar.php"?>
            <main class="col-10 bg-secondary">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Dam</li>
                        </ol>
                    </nav>
                    <div class="flex-fill"></div>


                </nav>
                <div class="container-fluid mt-3 p-4">
                    <div class="row flex-column flex-lg-row">
                        <div class="">


                            <form action="create" method="post" enctype="multipart/form-data" class="w-100 d-flex justify-content-center align-items-center">

                                <div class="card w-50 p-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-10 w-100 ">
                                            <input type="file" name="image" />

                                        </div>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input type="text" required name="name" placeholder="Dam name" class="form-control" id="inputEmail3">
                                        <label for="floatingInput">Email address</label>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="floatingInput" class="mb-1">Destrict</label>
                                        <div class="col-sm-10 w-100">
                                            <select required class="form-select" name="destrict">
                                                <?php foreach ($destricts as $destrict):?>
                                                    <option value="<?php echo $destrict->id?>"><?php echo $destrict->name?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="floatingInput" class="mb-1">Town</label>
                                        <div class="col-sm-10 w-100">
                                            <select required class="form-select" name="town">
                                                <?php foreach ($towns as $town):?>
                                                    <option value="<?php echo $town->id?>"><?php echo $town->name?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input type="date" required name="date" placeholder="Dam name" class="form-control" id="inputEmail3">
                                        <label for="floatingInput">Date</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" required name="mass" placeholder="Dam name" class="form-control" id="inputEmail3">
                                        <label for="floatingInput">Mass</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Description</label>
                                    </div>
                                    <div class="row mb-3 w-100 d-flex justify-content-end">
                                        <button type="reset" class="w-25 btn btn-outline-danger mx-1">Cancel</button>
                                        <button type="submit" class="w-25 btn btn-outline-primary">Create</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </main>


            <?php require "views/componet/fooder.php" ?>
        </div>
    </div>
<?php else:
    $login[]="error";
    view("admin/login", ["login" => $login]);
    ?>
<?php endif;?>

</body>
